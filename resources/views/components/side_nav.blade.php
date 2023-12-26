use App\Http\Controllers\TripController;
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box ">
      <!-- Dark Logo-->
      <a href="{{ route('admin.home.index') }}" class="logo logo-dark">
        <p class="h1 pt-3 fw-bolder">
          Tiki
        </p>
      </a>
    

      <button
        type="button"
        class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover"
      >
        <i class="ri-record-circle-line"></i>
      </button>
    </div>

    <div id="scrollbar">
      <div class="container-fluid">
        <div id="two-column-menu"></div>

        <ul class="navbar-nav" id="navbar-nav">
          
          <li class="menu-title"><span data-key="t-menu">Menu</span></li>

          <li class="nav-item">
            <a href="{{ route('admin.home.index') }}" class=" {{ request()->routeIs('admin.home.index')? 'active' : '' }} nav-link menu-link"  aria-controls="sidebarDashboards">
              <i data-feather="home" class="icon-dual"></i>
              <span data-key="t-dashboards" class="fs-5">Dashboard</span>
            </a>
          </li>


          <li class="nav-item btn-success">
            <a href="{{ route('admin.trip.create')}}" class="{{ request()->routeIs('admin.trip.create')? 'active' : '' }}  nav-link menu-link " >
              <i data-feather="box" class="icon-dual"></i>
              <span data-key="t-dashboards" class="fs-5">Add Trip</span>
            </a>
          </li>

          <li class="nav-item btn-success">
            <a  href="{{route('admin.location.create')}}" class="{{ request()->routeIs('admin.location.create')? 'active' : '' }}  nav-link menu-link " >
              <i data-feather="dollar-sign" class="icon-dual"></i>
              <span data-key="t-dashboards" class="fs-5">Add Location</span>
            </a>
          </li>
          <!-- end Dashboard Menu -->


        </ul>
      </div>
      <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
  </div>