@extends('layouts.base')

@section('content')

<!-- Page title -->
<div class="page-header text-white">
    <div class="row align-items-center">
        <div class="col-auto">
            <h2 class="page-title">
                <a href={{route('easytrack.dashboard')}} class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"
                            fill="rgba(255,255,255,1)" /></svg>
                </a>
                Profil de l'administrateur
            </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ml-auto d-print-none">
            <div class="d-flex align-items-center">
                <a href={{route('easytrack.profile')}} class="d-flex align-items-center text-white mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="mr-2"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" fill="rgba(255,255,255,1)"/></svg>
                    Vue d'ensemble
                </a>

                <a href={{route('easytrack.profile.edit')}} class="d-flex align-items-center text-white mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="mr-2"><path fill="none" d="M0 0h24v24H0z"/><path d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z" fill="rgba(255,255,255,1)"/></svg>
                    Éditer
                </a>
{{--
                <a href={{route('easytrack.profile.settings')}} class="d-flex align-items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="mr-2"><path fill="none" d="M0 0h24v24H0z"/><path d="M3.34 17a10.018 10.018 0 0 1-.978-2.326 3 3 0 0 0 .002-5.347A9.99 9.99 0 0 1 4.865 4.99a3 3 0 0 0 4.631-2.674 9.99 9.99 0 0 1 5.007.002 3 3 0 0 0 4.632 2.672c.579.59 1.093 1.261 1.525 2.01.433.749.757 1.53.978 2.326a3 3 0 0 0-.002 5.347 9.99 9.99 0 0 1-2.501 4.337 3 3 0 0 0-4.631 2.674 9.99 9.99 0 0 1-5.007-.002 3 3 0 0 0-4.632-2.672A10.018 10.018 0 0 1 3.34 17zm5.66.196a4.993 4.993 0 0 1 2.25 2.77c.499.047 1 .048 1.499.001A4.993 4.993 0 0 1 15 17.197a4.993 4.993 0 0 1 3.525-.565c.29-.408.54-.843.748-1.298A4.993 4.993 0 0 1 18 12c0-1.26.47-2.437 1.273-3.334a8.126 8.126 0 0 0-.75-1.298A4.993 4.993 0 0 1 15 6.804a4.993 4.993 0 0 1-2.25-2.77c-.499-.047-1-.048-1.499-.001A4.993 4.993 0 0 1 9 6.803a4.993 4.993 0 0 1-3.525.565 7.99 7.99 0 0 0-.748 1.298A4.993 4.993 0 0 1 6 12c0 1.26-.47 2.437-1.273 3.334a8.126 8.126 0 0 0 .75 1.298A4.993 4.993 0 0 1 9 17.196zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="rgba(255,255,255,1)"/></svg>
                    Paramètres
                </a> --}}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card col-lg-3 px-3 py-0"
        style="max-height: 200px; border:none; box-shadow: none; background-color: transparent;">
        <a>
            <img class="card-img-top" style="border-radius: 10px;" src="{{(Auth::user()->photo != null) ? asset(Auth::user()->photo) : asset("template/assets/static/avatar.png")}}" alt="Profile picture">
        </a>
        <div class="card-body d-flex flex-column">
            <div class="d-flex align-items-center mt-auto">
                <div class="ml-2">
                    <a class="text-body"> {{Auth::user()->name}} </a>
                    <small class="d-block text-muted"> {{Auth::user()->role->name}} </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card card-max-size">
            <div class="card-header">
                <h3 class="card-title">Activités générales</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Action</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1">
                                <span class="avatar">PK</span>
                            </td>
                            <td class="td-truncate">
                                <div class="text-truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                            </td>
                            <td class="text-nowrap text-muted">17 Juin 2020</td>
                        </tr>
                        <tr>
                            <td class="w-1">
                                <span class="avatar">PK</span>
                            </td>
                            <td class="td-truncate">
                                <div class="text-truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                            </td>
                            <td class="text-nowrap text-muted">17 Juin 2020</td>
                        </tr>
                        <tr>
                            <td class="w-1">
                                <span class="avatar">PK</span>
                            </td>
                            <td class="td-truncate">
                                <div class="text-truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                            </td>
                            <td class="text-nowrap text-muted">17 Juin 2020</td>
                        </tr>
                        <tr>
                            <td class="w-1">
                                <span class="avatar">PK</span>
                            </td>
                            <td class="td-truncate">
                                <div class="text-truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                            </td>
                            <td class="text-nowrap text-muted">17 Juin 2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
