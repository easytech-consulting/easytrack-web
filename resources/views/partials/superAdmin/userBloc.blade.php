<div class="navbar-nav flex-row order-md-last">
    <div class="nav-item d-none d-md-flex mr-2">
        <a href="#" class="nav-link px-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M10 3h4a8 8 0 1 1 0 16v3.5c-5-2-12-5-12-11.5a8 8 0 0 1 8-8zm2 14h2a6 6 0 1 0 0-12h-4a6 6 0 0 0-6 6c0 3.61 2.462 5.966 8 8.48V17z"
                    fill="rgba(255,255,255,1)" />
            </svg>
        </a>
    </div>
    <div class="nav-item dropdown d-none d-md-flex mr-3">
        <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z"
                    fill="rgba(255,255,255,1)" /></svg>
            <span class="badge bg-red"></span>
        </a>
        <div class="dropdown-menu notification-menu dropdown-menu-right dropdown-menu-card">
            <div class="card">
                <div class="card-header pt-2 pb-2">
                    <div class="col-auto">
                        <h3 class="card-title">Notifications</h3>
                    </div>
                    <div class="col-auto ml-auto">
                        <a href="#">Voir plus</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="notification-card d-flex align-items-center">
                        <span class="bg-yellow-lt text-white stamp mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                        </span>
                        <div class="mr-3 lh-sm">
                          <div class="strong">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                          </div>
                          <div class="text-gray">il y a 5min</div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
            <span class="avatar"
                style="background-image: url('https://ui-avatars.com/api/?name={{Auth::user()->name}}&background=FFFFFF&color=267FC9&font-size=0.30');">
            </span>
            <div class="d-none d-xl-block pl-2">
                <div> {{Auth::user()->name}} </div>
                <div class="mt-1 small text-muted">
                    Super Admin
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href={{route('easytrack.profile')}}>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon dropdown-item-icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/></svg>
                Mon compte
            </a>
            {{-- <a class="dropdown-item" href="./agenda.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="icon dropdown-item-icon">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8z" />
                </svg>
                Agenda
            </a> --}}
            {{-- <a class="dropdown-item" href="./help.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="icon dropdown-item-icon">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-5h2v2h-2v-2zm2-1.645V14h-2v-1.5a1 1 0 0 1 1-1 1.5 1.5 0 1 0-1.471-1.794l-1.962-.393A3.501 3.501 0 1 1 13 13.355z" />
                </svg>
                Aide
            </a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href={{route('logout')}}>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="icon dropdown-item-icon">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M4 18h2v2h12V4H6v2H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3zm2-7h7v2H6v3l-5-4 5-4v3z" />
                </svg>
                Se déconnecter</a>
        </div>
    </div>
</div>
