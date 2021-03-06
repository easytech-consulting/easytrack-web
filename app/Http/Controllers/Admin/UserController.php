<?php

namespace App\Http\Controllers\Admin;

use App\Action;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Payment;
use Illuminate\Http\Request;
use App\User;
use App\Site;
use Auth;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.users');
    }

    public function store(UserStoreRequest $request)
    {

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'address' => $request->address,
            'phone' => $request->phone,
            'bio' => $request->bio,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
        ]);

        $employee = new Employee([
            'contact_name' => $request->contact_name,
            'contact_phone' => $request->contact_phone,
            'cni_number' => $request->cni_number,
            'site_id' => $request->site_id
        ]);

        $photo = $request->file('photo');
        if ($photo) {
            $path = 'template/assets/static/users/' . Auth::user()->companies->first()->name . '/' . \App\Site::find($request->site_id)->name . '/';
            $fileName = $request->username . '.' . $photo->extension();
            $name = $path . $fileName;
            $photo->move($path, $name);
            $user->photo = $name;
        }

        DB::transaction(function () use ($user, $employee) {
            $user->save();
            $employee->user_id = $user->id;
            $employee->save();
        });

        flashy()->success("l'employé $user->name a été ajouté avec succès");
        Action::store(
            'Employee',
            $employee->id,
            'create',
            "Création du " . $user->role->name . " " . $user->name
        );

        return (string)view('ajax.admin.newUser', ['emp' => $employee]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::whereUsername($user)->withTrashed()->first();
        return view('admin.users.user-profile', compact('user'));
    }

    public function edit($user)
    {
        $user = User::whereUsername($user)->withTrashed()->first();
        return view('admin.users.user-profile-edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $user)
    {

        $user = User::whereUsername($user)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->bio = $request->bio;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;

        $user->employee->cni_number = $request->cni_number;
        $user->employee->contact_name = $request->contact_name;
        $user->employee->contact_phone = $request->contact_phone;


        $photo = $request->file('photo');
        if ($photo) {
            $path = 'template/assets/static/users/' . Auth::user()->companies->first()->name . '/' . \App\Site::find($request->site_id)->name . '/';
            $fileName = $request->username . '.' . $photo->extension();
            $name = $path . $fileName;
            $photo->move($path, $name);
            $user->photo = $name;
        }

        $user->save();
        $user->employee->save();

        notify()->success('Mise à jour de l\'utilisateur effectuée avec succès', 'Mise à jour utilisateur');
        Action::store(
            'Employee',
            $user->employee->id,
            'update',
            "Mise à jour du " . $user->role->name . " " . $user->name
        );
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $text = $request->text;
        if (!is_null($request->site_id)) {
            $site = Site::find($request->site_id);
            return view('ajax.admin.employees_search', compact('text', 'site'));
        }
        return view('ajax.admin.employees_search', compact('text'));
    }

    public function destroy(User $user)
    {
        $user->employee->delete();
        $user->delete();

        Action::store(
            'Employee',
            $user->employee->id,
            'destroy',
            "Suppression du " . $user->role->name . " " . $user->name
        );
        return 'success';
    }

    public function updateSalary(Request $request, User $user)
    {

        $user->employee->update($request->only('salary','paying_method','start_payment'));

        if($user->employee->payments->where('date_payment', '>', now())->first()){
            foreach ($user->employee->payments->where('date_payment', '>', now()) as $pay) {
                $pay->update([
                    'amount' => $request->salary,
                    'paying_method' => $request->paying_method
                ]);
            }
        } else {
            for ($month=0; $month < 36; $month++) {
                Payment::create([
                    'employee_id' => $user->employee->id,
                    'amount' => $user->employee->salary,
                    'paying_method' => $user->employee->paying_method,
                    'date_payment' => Carbon::parse($request->start_payment)->addMonths($month)
                ]);
            }
        }

        return response()->json([
            'salary' => $user->employee->salary,
        ]);
    }

    public function stopSalary(User $user){
        $user->employee->status = 'suspendu';
        $user->employee->save();

        foreach ($user->employee->payments->where('date_payment', '>', now()) as $pay) {
            $pay->is_active = 0;
            $pay->save();
        }

        return 'success';
    }

    public function activateSalary(User $user){
        $user->employee->status = 'actif';
        $user->employee->save();

        foreach ($user->employee->payments->where('date_payment', '>', now()) as $pay) {
            $pay->is_active = 1;
            $pay->save();
        }

        return 'success';
    }
}
