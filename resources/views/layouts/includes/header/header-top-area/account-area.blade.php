<div class="account-area text-end">
    <ul>
        <li><a href="{{ route('myAccount') }}">My Account</a></li>
        <li><a href="{{ route('checkout') }}">Checkout</a></li>
        @if (auth()->check())
          <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        @else
          <li><a href="{{ route('login') }}">Sign in</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    </ul>
</div>
