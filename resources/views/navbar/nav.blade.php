<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img
                src="{{ asset('public/images/faces/Logo.png') }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                src="{{ asset('public/images/faces/Logo.png') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field ml-4 d-none d-md-block">
            <form class="d-flex align-items-stretch h-100" action="#">
                <div class="input-group">
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search">
                    <div class="input-group-btn">
                        <button type="button" class="btn bg-transparent dropdown-toggle px-0" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-earth"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">This week</a>
                            <a class="dropdown-item" href="#">This month</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Month and older</a>
                        </div>
                    </div>
                    <div class="input-group-addon bg-transparent border-0 search-button">
                        <button type="submit" class="btn btn-sm bg-transparent px-0">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>
          

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset('public/images/faces/Logo.png') }}" alt="image">
                    <span class="d-none d-lg-inline">La pasadita</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-logout mr-2 text-primary"></i>
                        Salir
                    </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
