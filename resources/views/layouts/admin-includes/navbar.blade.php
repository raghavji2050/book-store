<nav class="navbar navbar-expand navbar-theme">
    <a class="sidebar-toggle d-flex me-2 mt-3">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown ms-lg-2">
              <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="align-middle fas fa-cog"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="userDropdown">
                  @csrf
                  <a type="submit" class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i>
                     Sign out
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
              </div>
          </li>
        </ul>
    </div>
</nav>
