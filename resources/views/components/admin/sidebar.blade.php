<div class="vertical-menu">

  <!-- LOGO -->
  <div class="navbar-brand-box" style="height: 70px; display: flex; justify-content: flex-start; align-items: center;">
    <a href="{{ Route('admin.dashboard') }}" class="logo logo-dark">
      {{-- <span class="logo-sm">
        <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
      </span> --}}
      <span class="logo-lg">
        <img src="/assets/images/logo-dark.png" alt="" height="20" style="height: 20px;">
      </span>
    </a>

    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
      </span>
      <span class="logo-lg">
        <img src="/assets/images/logo-light.png" alt="" height="20" style="height: 20px;">
      </span>
    </a>
  </div>

  <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
    <i class="fa fa-fw fa-bars"></i>
  </button>

  <div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
          <a href="{{ Route('admin.dashboard') }}">
            <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="menu-title">Apps</li>

        <li>
          <a href="{{ Route('admin.users') }}">
            <i class="uil-users-alt"></i>
            <span>Users</span>
          </a>
          
        </li>

        <li>
          <a href="{{Route('admin.project')}}" >
            <i class="uil-store"></i>
            <span>Project</span>
          </a>
        </li>

        <li>
          <a href="{{Route('admin.invest')}}">
            <i class="bx bxs-bar-chart-alt-2"></i>
            <span>Invest</span>
          </a>
          
        </li>

        <li>
          <a href="{{Route('admin.message')}}">
            <i class="bx bxs-message"></i>
            <span>Messages</span>
          </a>
          
        </li>
        <li>
          <a href="{{Route('admin.news')}}">
            <i class="bx bx-file"></i>
            <span>News</span>
          </a>
        </li>
        <li>
          <a href="{{Route('admin.employee')}}">
            <i class="bx bx-file"></i>
            <span>Employees</span>
          </a>
        </li>


        {{-- <li>
          <a href="javascript: void(0);"
            class="
            @if (!count(auth()->user()->unreadnotifications) > 0) has-arrow @endif
              waves-effect">
            <i class="uil-comments-alt"></i>

            @if (count(auth()->user()->unreadnotifications) > 0)
              <span class="badge rounded-pill bg-warning float-end">New</span>
            @endif
            <span>Messages</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ Route('admin.notifications') }}">
                @if (count(auth()->user()->unreadnotifications) > 0)
                  <span
                    class="badge rounded-pill bg-primary float-end">{{ count(auth()->user()->unreadnotifications) }}</span>
                @endif
              </a>
            </li>
          </ul>
        </li> --}}

      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
