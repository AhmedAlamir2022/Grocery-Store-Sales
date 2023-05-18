<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{ URL::asset('admin/images/faces/img_avatar3.png') }}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              {{ Auth::guard('admin')->user()->name }}
            </p>
            <p class="designation">
              {{ Auth::guard('admin')->user()->email }}
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-home menu-icon"></i><span class="menu-title">Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
          <i class="fas fa-users menu-icon"></i>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.admins') }}"> Admins </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.employees') }}"> Employees </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.users') }}"> Users </a></li>
          </ul>`
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all.categories') }}"><i class="fa fa-puzzle-piece menu-icon"></i><span class="menu-title">Categories</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all.products') }}"><i class="fa fa-chart-pie menu-icon"></i><span class="menu-title">Products</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
          <i class="fas fa-columns menu-icon"></i>
          <span class="menu-title">Reports</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reports">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('report.product') }}"> Products Reports </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('report.user') }}"> Customers Reports </a></li>
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
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.offers') }}"> General </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.soffers') }}"> Spescial </a></li>
          </ul>`
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('all.orders') }}"><i class="fa fa-pen-square menu-icon"></i><span class="menu-title">Customer Orders</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
          <i class="fas fa-map-marker-alt menu-icon"></i>
          <span class="menu-title">Contact Info</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contact">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.messages') }}"> Customers Messages </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('Query.index') }}"> Contact Info </a></li>
          </ul>`
        </div>
      </li>
      
      
      
      
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all.subscriptions') }}"><i class="fa fa-table menu-icon"></i><span class="menu-title">Subscriptions</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Brand.index') }}"><i class="fa fa-clipboard-list menu-icon"></i><span class="menu-title">Brands</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all.testimoinals') }}"><i class="fa fa-file-alt menu-icon"></i><span class="menu-title">Terstimonials</span></a>
      </li>
      <hr>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.profile') }}"><i class="fa fa-user menu-icon"></i><span class="menu-title">Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('change.password') }}"><i class="fa fa-lock menu-icon"></i><span class="menu-title">Change Password</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.logout') }}"><i class="fa fa-power-off menu-icon"></i><span class="menu-title">Logout</span></a>
      </li>
    </ul>
  </nav>