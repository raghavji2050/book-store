<!-- main-menu-area-start -->
<div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-area">
                    <nav>
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Category<i class="fa fa-angle-down"></i></a>
                                <div class="mega-menu">
                                  @foreach($mostAreaBooks as $mostAreaBook)
                                    <span>
                                        <a href="javascript:void(0)" class="title">{{ $mostAreaBook['title'] }}</a>
                                        @foreach($mostAreaBook['books'] as $book)
                                          <a href="{{ route('productDetail', $book['id']) }}">{{ $book['name'] }}</a>
                                        @endforeach
                                    </span>
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Collections<i class="fa fa-angle-down"></i></a>
                                <div class="mega-menu">
                                  @foreach($productAreaBooks as $productAreaBook)
                                    <span>
                                        <a href="javascript:void(0)" class="title">{{ $productAreaBook['title'] }}</a>
                                        @foreach($productAreaBook['books'] as $book)
                                          <a href="{{ route('productDetail', $book['id']) }}">{{ $book['name'] }}</a>
                                        @endforeach
                                    </span>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                @if (!auth()->check())
                <div class="safe-area">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="safe-area">
                    <a href="{{ route('register') }}">Register</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- main-menu-area-end -->
