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
            <li class="sidebar-item {{ request()->routeIs('admin.collections.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.collections.index') }}">
                  <i class="align-middle me-2 fas fa-fw fa-user"></i>
                  <span class="align-middle">Collections</span> </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.categories.index') }}">
                  <i class="align-middle me-2 fas fa-fw fa-user"></i>
                  <span class="align-middle">Categories</span> </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.authors.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.authors.index') }}">
                  <i class="align-middle me-2 fas fa-fw fa-user"></i>
                  <span class="align-middle">Authors</span> </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.books.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.books.index') }}">
                  <i class="align-middle me-2 fas fa-fw fa-user"></i>
                  <span class="align-middle">Books</span> </a>
            </li>
          @endif
        </ul>
    </div>
</nav>
