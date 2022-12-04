<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand text-center" href="{{ route('admin.index') }}">
        <span class="logo-lg">
          <img src="/img/color-logo.png" alt="" height="30">
        </span>
    </a>
    <div class="sidebar-content">
        <ul class="sidebar-nav mt-5">
          @if (auth()->user()->hasRole('Admin'))
            <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.index') }}">
                  <i class="align-middle me-2 fas fa-fw fa-user"></i>
                  <span class="align-middle">Users</span> </a>
            </li>
          @endif
        </ul>
    </div>
</nav>
