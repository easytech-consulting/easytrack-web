<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Helmesvs\Notify\Facades\Notify;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('employee.dashboard');
    }



    public function profile()
    {
        return view('employee.profile');
    }

    public function profileEdit(){
        return view('employee.profileEdit');
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required',
            'phone' => 'required|min:200000000|max:999999999|numeric'
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->bio = $request->bio;

        $photo = $request->file('photo');
        if($photo){
            $path = 'template/assets/static/users/'.$user->employee->site->company->name.'/'.$user->employee->site->name.'/';
            $fileName = $user->username.'.'.$photo->extension();
            $name = $path.$fileName;
            $photo->move($path,$name);
            $user->photo = $name;
        }
        
        $user->save();

        flashy()->info("Profil mis à jour avec succès!");
        return redirect()->back();
    }

    public function profileSettings(){
        return view('employee.profileSetting');
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        flashy()->info("Nous espérons vous revoir bientôt!", 'Au revoir');
        return redirect('/login');

      }


}
