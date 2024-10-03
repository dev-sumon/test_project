<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image" />
                <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                    <p>Alexander Pierce - Web Developer</p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer d-flex justify-content-between">
                    <div class="">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="">
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        <a href="#" class="btn btn-default btn-flat"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                            out</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
