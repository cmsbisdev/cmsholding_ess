<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo ">
    <img src="{{ asset('assets/img/') }}/logo/cms2.png" style="width:50px; margin-left: -1rem !important;" alt="">
    <a href="#" class="app-brand-link">
      <span class="app-brand-logo demo"></span>
      <span class="app-brand-text menu-text fw-bolder ms-2" style="font-size: 20px;">ESS</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Dashboard</span>
    </li>
    <!-- Dashboard -->
    {{-- <li class="menu-item {{  request()->routeIs('dashboard') ? 'active' : '' }}"> --}}
    <li class="menu-item">
      <a href="" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Attendances">Attendances</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
                <a href="" class="menu-link">
                    <div data-i18n="List Attendance">List Attendance</div>
                </a>
            </li>
          </ul>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Management</span>
    </li>
    {{-- <li class="menu-item"> --}}
    <li class="menu-item <?= Request::segment(1) == 'management' ? 'active open' : '' ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Management">Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= Request::segment(2) == 'users' ? 'active open' : '' ?>">
          <a href="{{ route('users.index') }}" class="menu-link">
            <div data-i18n="Users Management">Users Management</div>
          </a>
        </li>
        <li class="menu-item <?= Request::segment(2) == 'offices' ? 'active open' : '' ?>">
          <a href="{{ route('offices.index') }}" class="menu-link">
            <div data-i18n="Offices Management">Offices Management</div>
          </a>
        </li>
        <li class="menu-item <?= Request::segment(2) == 'roles' ? 'active open' : '' ?>">
          <a href="{{ route('roles.index') }}" class="menu-link">
            <div data-i18n="Roles Management">Roles Management</div>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</aside>
