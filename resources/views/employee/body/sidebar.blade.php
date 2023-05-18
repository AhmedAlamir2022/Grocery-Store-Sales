<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{ URL::asset('admin/images/faces/img_avatar3.png') }}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              {{ Auth::guard('employee')->user()->name }}
            </p>
            <p class="designation">
              {{ Auth::guard('employee')->user()->email }}
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('employee.dashboard') }}"><i class="fa fa-home menu-icon"></i><span class="menu-title">Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('eall.categories') }}"><i class="fa fa-puzzle-piece menu-icon"></i><span class="menu-title">Categories</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('eall.products') }}"><i class="fa fa-chart-pie menu-icon"></i><span class="menu-title">Products</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
          <i class="fas fa-columns menu-icon"></i>
          <span class="menu-title">Reports</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reports">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('ereport.product') }}"> Products Reports </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('ereport.user') }}"> Customers Reports </a></li>
          </ul>`
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#offers" aria-expanded="false" aria-controls="offers">
          <i class="fab fa-wpforms menu-icon"></i>
          <span class="menu-title">Offers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="offers">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('eall.offers') }}"> General </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('eall.soffers') }}"> Spescial </a></li>
          </ul>`
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('eall.orders') }}"><i class="fa fa-pen-square menu-icon"></i><span class="menu-title">All Orders</span></a>
      </li>

      
      <hr>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('employee.profile') }}"><i class="fa fa-user menu-icon"></i><span class="menu-title">Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('employee.password') }}"><i class="fa fa-lock menu-icon"></i><span class="menu-title">Change Password</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('employee.logout') }}"><i class="fa fa-power-off menu-icon"></i><span class="menu-title">Logout</span></a>
      </li>
    </ul>
  </nav>