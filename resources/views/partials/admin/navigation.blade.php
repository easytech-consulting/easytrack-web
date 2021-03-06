<div class="collapse navbar-collapse" id="navbar-menu">
    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="icon">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"
                                fill="rgba(255,255,255,0.8)" /></svg>
                    </span>
                    <span class="nav-link-title">
                        Accueil
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown"
                    role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 19V5.7a1 1 0 0 1 .658-.94l9.671-3.516a.5.5 0 0 1 .671.47v4.953l6.316 2.105a1 1 0 0 1 .684.949V19h2v2H1v-2h2zm2 0h7V3.855L5 6.401V19zm14 0v-8.558l-5-1.667V19h5z" fill="rgba(255,255,255, 0.8)"/></svg>
                    </span>
                    <span class="nav-link-title">
                        Sites
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{route('admin.products')}}">
                            Produits
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/admin/customers">
                            Clients
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/admin/suppliers">
                            Fournisseurs
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('admin.sites')}}">
                            Gérer les sites
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown"
                    role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="icon">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zM19 8H5v12h14V8zm-.5-2L17 4H7L5.5 6h13zM9 10v2a3 3 0 0 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2h2z"
                                fill="rgba(255,255,255,0.8)" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        Commandes
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="active">
                        <a class="dropdown-item" href="{{route('admin.sales.kanban')}}">
                            Commandes clients
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('admin.purchases')}}">
                            Bons de commandes
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.reports')}}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 12h2v9H3v-9zm16-4h2v13h-2V8zm-8-6h2v19h-2V2z" fill="rgba(255,255,255, 0.8)"/></svg>
                    </span>
                    <span class="nav-link-title">
                        Rapports
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.company.users')}}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="icon">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"
                                fill="rgba(255,255,255,0.8)" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                        employés
                    </span>
                </a>
            </li>
        </ul>
        {{-- <div
            class="ml-md-auto pl-md-4 py-2 py-md-0 mr-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0">
            <form action="." method="get">
                <div class="input-icon">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </span>
                    <input type="text" class="form-control form-control-rounded form-control-dark"
                        placeholder="Search…" />
                </div>
            </form>
        </div> --}}
    </div>
</div>
