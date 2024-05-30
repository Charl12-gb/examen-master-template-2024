<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <h3  class="mt-4"><span class="text-primary">P</span><span class="text-danger">V</span></h3>
            </span>
            <span class="logo-lg">
                <h3  class="mt-4"><span class="text-primary">P</span>rime <span class="text-danger">V</span>idéo</h3>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <h3  class="mt-4"><span class="text-primary">P</span><span class="text-danger">V</span></h3>
            </span>
            <span class="logo-lg">
                <h3  class="mt-4"><span class="text-primary">P</span>rime <span class="text-danger">V</span>idéo</h3>
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
                        <i data-feather="list" class="icon-dual"></i> <span data-key="t-widgets">Médias</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('media-form') }}">
                        <i data-feather="plus" class="icon-dual"></i> <span data-key="t-widgets">Ajouter une vidéo</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
