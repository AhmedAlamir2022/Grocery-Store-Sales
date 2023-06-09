<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="{{ route('employee.dashboard') }}"><img src="{{ URL::asset('admin/images/logo.svg')}}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="{{ route('employee.dashboard') }}"><img src="{{ URL::asset('admin/images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="fas fa-bars"></span>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item nav-search d-none d-md-flex">
          <div class="nav-link">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ URL::asset('admin/images/faces/img_avatar3.png') }}" alt="profile"/> {{ Auth::guard('employee')->user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('employee.profile') }}"><i class="fas fa-user text-primary"></i>Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('employee.password') }}"><i class="fas fa-cog text-primary"></i>Change Password </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('employee.logout') }}"><i class="fas fa-power-off text-primary"></i>Logout</a>
          </div>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="fas fa-ellipsis-h"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="fas fa-bars"></span>
      </button>
    </div>
  </nav>