<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteStoreRequest;
use App\Http\Requests\SiteUpdateRequest;
use Illuminate\Http\Request;
use App\Site;
use Auth;

class SiteController extends Controller
{
    public function index()
    {
        $site = Auth::user()->employee->site;
        return view('employee.sites.sites', compact('site'));
    }

    public function store(SiteStoreRequest $request)
    {

        $site = new Site();
        $site->company_id = Auth::user()->companies()->first()->id;
        $site->name = $request->name;
        $site->slug= $this->makeSlug($request->name);
        $site->email = $request->email;
        $site->phone1 = $request->phone1;
        $site->phone2 = $request->phone2;
        $site->town = $request->town;
        $site->street = $request->street;

        if($site->save()){
            flashy()->success('Le site a été ajouté avec succès');
            return 'success';
        } else {
            flashy()->success("Une erreur s'est produite lors de l'ajout du site ");
            return 'error';
        }
    }

    public function users($site_slug){

        $site = Site::whereSlug($site_slug)->first();
        return view('employee.sites.users', compact('site'));
    }


    public function update(SiteUpdateRequest $request)
    {

        $site = Site::find($request->site_id);

        $site->name = $request->name;
        $site->email = $request->email;
        $site->phone1 = $request->phone1;
        $site->phone2 = $request->phone2;
        $site->town = $request->town;
        $site->street = $request->street;

        if($site->save()){
            return 'success';
        } else {
            return 'error';
        }
    }


    public function edit($id)
    {
        $lims_site_data = Site::find($id);
        return $lims_site_data;
    }

    public function destroy(Site $site)
    {
        foreach ($site->employees as $key => $employee) {
            $employee->user->delete();
            $employee->delete();
        }
        foreach ($site->suppliers as $supplier) {
            $supplier->delete();
        }
        foreach ($site->customers as $customer) {
            $customer->delete();
        }

        $site->delete();
    }
}
