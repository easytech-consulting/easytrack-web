@extends('layouts.registerLayout')

@section('content')
<div class="auth-page row flex-fill d-flex flex-row justify-content-center">
        <div class="col-lg-4 d-flex flex-row align-items-center">
            <h1 class="text-white"><b>Gérer</b> votre snack<br>comme un Pro</h1>
        </div>
        <div class="col-lg-4 d-flex flex-row align-items-center">
            <div class="container-tight">
                <div class="card card-md auth-card pt-3 pb-5 px-3">
                    <div class="card-body mb-3">
                        <div class="text-center mb-5">
                            <img src="{{ asset('dashboard/static/logo.svg') }}" height="56" alt="" />
                        </div>
                        <h2 class="auth-title mb-2 text-center text-black">Inscription</h2>
                        <div class="register-step-1">
                            <h4 class="mb-5 text-center text-muted">
                                Créer un compte sur la plateforme
                            </h4>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Nom complet" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Adresse" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Téléphone" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 12a8 8 0 1 0-3.562 6.657l1.11 1.664A9.953 9.953 0 0 1 12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10v1.5a3.5 3.5 0 0 1-6.396 1.966A5 5 0 1 1 15 8H17v5.5a1.5 1.5 0 0 0 3 0V12zm-8-3a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Email" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-4.783 4.995L12 15a5 5 0 0 1-5-5V7a5 5 0 0 1 4.783-4.995L12 2zm0 2a3 3 0 0 0-2.995 2.824L9 7v3a3 3 0 0 0 5.995.176L15 10V7a3 3 0 0 0-3-3z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Nom d'utilisateur" autocomplete="off" />
                                </div>
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
                                    <input type="password" name="password" id="pwd"
                                        class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Mot de passe" />
                                    <span class="unmask-password input-icon-addon mr-30" id="unmask"
                                        style="z-index: 9999; cursor: pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="#000" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="2" />
                                            <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                            <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="form-footer mb-3">
                                <button type="text" class="btn btn-gradient btn-block btn-pill btn-submit-step-1 btn-no-border">
                                    Continuer
                                </button>
                                <div class="text-center mt-3">Vous avez un compte ? <a href="{{ route('login') }}" class="text-muted" tabindex="-1">Connexion</a></div>
                            </div>
                        </div>
                        <div class="register-step-2">
                            <h4 class="mb-5 text-center text-muted">
                                Ajouter un snack sur la plateforme
                            </h4>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 21H2v-2h1V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2zm-5-2h2v-8h-6v8h2v-6h2v6zm0-10V5H5v14h6V9h6zM7 11h2v2H7v-2zm0 4h2v2H7v-2zm0-8h2v2H7V7z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                    placeholder="Nom du snack">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Ville" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Téléphone N°1" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Téléphone N°1" autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-footer mb-3">
                                <button type="text" class="btn btn-gradient btn-block btn-pill btn-submit-step-2 btn-no-border">
                                    Continuer
                                </button>
                                <button type="text" class="btn btn-outline-dark btn-block btn-pill btn-outline btn-back-step-1 mt-3">
                                    Retour
                                </button>
                            </div>
                        </div>
                        <div class="register-step-3">
                            <h4 class="mb-5 text-center text-muted">
                                Ajouter un site à votre snack
                            </h4>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 12a8 8 0 1 0-3.562 6.657l1.11 1.664A9.953 9.953 0 0 1 12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10v1.5a3.5 3.5 0 0 1-6.396 1.966A5 5 0 1 1 15 8H17v5.5a1.5 1.5 0 0 0 3 0V12zm-8-3a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Email" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Ville" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Quartier" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Téléphone N°1" autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/></svg>
                                    </span>
                                    <input type="text" class="auth-input form-control form-control-rounded py-2 px-5"
                                        placeholder="Téléphone N°2" autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-footer mb-3">
                                <button type="text" class="btn btn-gradient btn-block btn-pill btn-submit-step-3 btn-no-border">
                                    Continuer
                                </button>
                                <button type="text" class="btn btn-outline-dark btn-block btn-pill btn-outline btn-back-step-2 mt-3">
                                    Retour
                                </button>
                            </div>
                        </div>
                        <div class="register-step-4">
                            <h4 class="mb-5 text-center text-muted">
                                Sélectionez la license pour votre snack
                            </h4>
                            <div class="mb-4">
                                <div class="input-icon">
                                    <span class="input-icon-addon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z"/></svg>
                                    </span>
                                    <select class="auth-input form-select form-control-rounded py-2 px-5">
                                        <option>1 Mois</option>
                                        <option>2 Mois</option>
                                        <option>3 Mois</option>
                                        <option>5 Mois</option>
                                        <option>1 an</option>
                                        <option>2 ans</option>
                                        <option>3 ans</option>
                                        <option>5 ans</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-footer mb-3">
                                <button type="text" class="btn btn-gradient btn-block btn-pill btn-submit-step-4 btn-no-border">
                                    Continuer
                                </button>
                                <button type="text" class="btn btn-outline-dark btn-block btn-pill btn-outline btn-back-step-3 mt-3">
                                    Retour
                                </button>
                            </div>
                        </div>
                        <div class="register-step-5">
                            <h1 class=" mb-4">Récapitulatif</h1>
                            <div class=" mb-4">
                                <h4 class="text-muted">Nom</h4>
                                <h2>Estelle Belinga</h2>
                            </div>
                            <div class=" mb-4">
                                <h4 class="text-muted">Nom d'utilisateur</h4>
                                <h2>estelle97</h2>
                            </div>
                            <div class=" mb-4">
                                <h4 class="text-muted">Snack</h4>
                                <h2>Black & White</h2>
                            </div>
                            <div class=" mb-4">
                                <h4 class="text-muted">Site</h4>
                                <h2>Yaoundé, Bastos</h2>
                            </div>
                            <div class=" mb-4">
                                <h4 class="text-muted">Licence</h4>
                                <h2>1 Mois</h2>
                            </div>
                            <div class="form-footer mb-3">
                                <button type="submit" class="btn btn-gradient btn-block btn-pill btn-submit-step-5 btn-no-border">
                                    Terminer
                                </button>
                                <button type="text" class="btn btn-outline-dark btn-block btn-pill btn-outline btn-back-step-4 mt-3">
                                    Retour
                                </button>
                            </div>
                        </div>
                        <div class="register-step-6">
                            <div class="text-center mt-5 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="120" height="120"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z" fill="rgba(47,204,113,1)"/></svg>
                            </div>
                            <h1 class="text-center mb-3">Inscription réussie </h1>
                            <div class="form-footer mb-3 px-4">
                                <button type="text" class="btn btn-gradient btn-block btn-pill btn-submit btn-no-border">
                                    Se connecter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 text-center mt-1">
                        Protected by reCAPTCHA and subject to the <span class="text-primary">Privacy Policy</span> and <span class="text-primary">Terms of Service</span>.
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector(".unmask-password").addEventListener("click", function () {
            let input = document.getElementById('pwd');
            if (input.type == "password") {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        });

    </script>
    @include('notify::messages')

    @notifyJs

@endsection