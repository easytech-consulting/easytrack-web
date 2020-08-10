<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\User;
use App\Site;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterStoreRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->is_admin == 3)
        {
            $this->redirectTo = route('easytrack.dashboard');
        } elseif (Auth::check() && Auth::user()->is_admin == 2)
        {
            $this->redirectTo = route('admin.dashboard');
        } else{
            $this->redirectTo = route('employee.dashboard');
        }
        $this->middleware('guest');
    }

    public function index(Request $request){
        $types = \App\Type::all();
        return view('register', compact('types'));
    }

      /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateRegister(Request $request)
    {
        $messages = [
            'login.required' => "L'adresse email ou le nom d'utilisateur doit être renseigné",
            'password.required' => 'Veuillez entrer un mot de passe',
        ];

        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ], $messages);
    }

    public function store(Request $request){

        // Validate and create admin
        $validateUser =  $request->validate([
            'username' => 'sometimes|sometimes|required',
            'useraddress' => 'sometimes|required',
            'userphone' => 'sometimes|required|min:9|max:9|unique:users,phone',
            'useremail' => 'sometimes|required|email|unique:users,email',
            'userusername' => 'sometimes|required|unique:users,username',
            'userpassword' => 'sometimes|required|min:8',

            'companyname' => 'sometimes|required|unique:companies,name',
            'companyphone1' => 'sometimes|required|min:9|max:9|unique:companies,phone1',
            'companyemail' => 'sometimes|required|email|unique:companies,email',

            'sitename' => 'sometimes|required|unique:sites,name',
            'sitephone1' => 'sometimes|required|min:9|max:9|unique:sites,phone1',
            'siteemail' => 'sometimes|required|email|unique:sites,email',
            'sitestreet' => 'sometimes|required',
            'sitetown' => 'sometimes|required'
        ]);

        // Remove password_confirmation field to user array

        $user = new User([
            'name' => $request->username,
            'email' => $request->useremail,
            'username' => $request->userusername,
            'address' => $request->useraddress,
            'phone' => $request->userphone,
            'password' => bcrypt($request->userpassword),
            'is_admin' => 2,
            'role_id' => 5
        ]);

        $company = new Company([
            'name' => $request->companyname,
            'slug' => $this->makeSlug($request->companyname),
            'email' => $request->companyemail,
            'phone1' => $request->companyphone1,
            'phone2' => $request->companyphone2,
            'town' => $request->companytown,
            'street' =>$request->companystreet,
        ]);


        $site = new Site([
            'name' => $request->sitename,
            'slug' => $this->makeSlug($request->sitename),
            'email' => $request->siteemail,
            'phone1' => $request->sitephone1,
            'phone2' => $request->sitephone2,
            'town' => $request->sitetown,
            'street' =>$request->sitestreet,
        ]);
        if($request->step != 'last'){
            return response()->json([
                "message" => "Operation success!",
            ], 200);
        }
        DB::transaction(function () use($user, $company, $site){
            $user->save();
                $company->user_id = $user->id;
                $company->save();
                    $site->company_id = $company->id;
                    $site->save();

        });

        // Attach snack with his type of subscription
        $type = \App\Type::findOrFail($request->type);
        $company->types()->attach($type->id,[
            'end_date' => Carbon::now()->addMonth($type->duration),
        ]);

        return response()->json([
            "message" => "Operation success!",
        ], 201);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/
}
