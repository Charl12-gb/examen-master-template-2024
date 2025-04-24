<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <h3  class="mt-4"><span class="text-primary">E</span><span class="text-danger">M</span></h3>
            </span>
            <span class="logo-lg">
                <h3  class="mt-4"><span class="text-primary">E</span>XAMEN <span class="text-danger">M</span>ASTER</h3>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <h3  class="mt-4"><span class="text-primary">E</span><span class="text-danger">M</span></h3>
            </span>
            <span class="logo-lg">
                <h3  class="mt-4"><span class="text-primary">E</span>XAMEN <span class="text-danger">M</span>ASTER</h3>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('home') }}">
                        <i data-feather="list" class="icon-dual"></i> <span data-key="t-widgets">Liste</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('add') }}">
                        <i data-feather="plus" class="icon-dual"></i> <span data-key="t-widgets">Ajouter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('login-index') }}">
                        <i data-feather="user" class="icon-dual"></i> <span data-key="t-widgets">Connexion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('register-form') }}">
                        <i data-feather="plus" class="icon-dual"></i> <span data-key="t-widgets">Inscription</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
