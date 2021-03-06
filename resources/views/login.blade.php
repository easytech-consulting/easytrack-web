@extends('layouts.auth')

@section('content')
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 d-flex flex-row align-items-center">
        <div class="container-tight">
            <form class="card card-md auth-card pt-6 pb-5 px-3" action="" method="post">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <a href="/">
                            <img src={{asset("template/assets/static/logo.svg")}} height="56" alt="" />
                        </a>
                    </div>
                    <h2 class="mb-2 text-center text-black">Connexion</h2>
                    <h4 class="mb-5 text-center text-muted">
                        Authentifiez vous pour accéder à la plateforme
                    </h4>
                    <div class="mb-4">
                        <div class="input-icon {{$errors->has('login') ? 'bg-danger' : ''}}">
                            <span class="input-icon-addon ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-4.783 4.995L12 15a5 5 0 0 1-5-5V7a5 5 0 0 1 4.783-4.995L12 2zm0 2a3 3 0 0 0-2.995 2.824L9 7v3a3 3 0 0 0 5.995.176L15 10V7a3 3 0 0 0-3-3z" />
                                </svg>
                            </span>
                            @csrf
                            <input type="text" name="login" id="login" class="auth-input form-control form-control-rounded py-2 px-5"
                                placeholder="Email ou Nom d'utilisateur" autocomplete="off" value="{{old('login')}}"/>
                        </div>
                        {!! $errors->first('login','<span class="help-block"> :message </span>') !!}
                    </div>
                    <div class="mb-3">
                        <div class="input-icon">
                            <span class="input-icon-addon ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zM5 10v10h14V10H5zm6 4h2v2h-2v-2zm-4 0h2v2H7v-2zm8 0h2v2h-2v-2zm1-6V7a4 4 0 1 0-8 0v1h8z" />
                                </svg>
                            </span>
                            <input type="password" name="password" id="password" class="auth-input form-control form-control-rounded py-2 px-5"
                                placeholder="Mot de passe" />
                            <span class="input-icon-addon mr-2">
                                <a id="show-password" class="link-secondary" title="Show password" data-toggle="tooltip"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                        <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer mb-3">
                        <button type="submit" class="btn btn-gradient btn-block btn-no-border">
                            Se connecter
                        </button>
                        <div class="row justify-content-center align-items-center px-3 mt-3">
                            <div class="col text-center p-0"><h4>ou</h4></div>
                        </div>
                        <a href={{route('register')}} tabindex="-1" class="btn btn-dark btn-block btn-no-border mt-3">
                            Inscription
                        </a>
                    </div>
                    <div class="text-center text-muted mb-3">
                        Mot de passe oublié ?
                        <a href={{route('password-forgot')}} tabindex="-1">Cliquez ici</a>
                    </div>
                </div>
                <div class="px-5 text-center mt-5">
                    Protected by reCAPTCHA and subject to the <span class="text-primary">Privacy Policy</span> and <span class="text-primary">Terms of Service</span>.
                </div>
            </form>
        </div>
    </div>
@endsection
