<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

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
        //$user = User::findOrFail(Auth::id());
        //dd($user->can('permission-slug'));
        $user = Auth::user();
        $users = $request->user();
        //dd($users->hasRole('gerant'));
        //dd($users->can('create_user'));
        return view('admin.dashboard.home', compact('user'));
    }

    

    public function profile($id)
    {
        $user = Auth::user();
        $snack = DB::table('users')
            ->join('snacks', 'users.snack_id', '=', 'snacks.id')
            ->select('users.*', 'snacks.*')
            ->get();
        $lims_user_data = User::find($id);
        return view('admin.dashboard.user-profile', compact('lims_user_data','snack','user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required',
        ]);

        $user = User::findOrFail(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->save();
        
        /*$input = $request->all();
        $lims_user_data = User::find($id);
        $lims_user_data->update($input);*/
        notify()->success('Mise à jour du profil effectuée avec succès', 'Mise à jour du profil');
        return redirect()->back();
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        notify()->success('Déconnexion réussie', 'A bientot');
        return redirect('/login');
        
      }


}
