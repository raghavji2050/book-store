@php
  $totalQuantity = Cart::getTotalQuantity();
  $cartCollection = Cart::getContent();
@endphp
<div class="my-cart">
    <ul>
        <li>
            <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i>My Cart</a>
            <span>{{ $totalQuantity }}</span>
            @if ($totalQuantity)
                <div class="mini-cart-sub">
                  @foreach($cartCollection as $cart)
                    <div class="cart-product">
                        <div class="single-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{ $cart->attributes['image'] }}" alt="book" /></a>
                            </div>
                            <div class="cart-info">
                                <h5><a href="#">{{ $cart->name }}</a></h5>
                                <p>{{ $cart->quantity }} x ₹{{ $cart->price }}</p>
                            </div>
                            <div class="cart-icon">
                                <a href="javascript:void(0)" class="remove-from-cart" data-book-id="{{ $cart->id }}"><i class="fa fa-remove"></i></a>
                            </div>
                        </div>
                    </div>
                  @endforeach
                    <div class="cart-totals">
                        <h5>Total <span>₹{{ \Cart::getTotal(); }}</span></h5>
                    </div>
                    <div class="cart-bottom">
                        <a class="view-cart" href="{{ route('cart') }}">view cart</a>
                        <a href="{{ route('checkout') }}">Check out</a>
                    </div>
              </div>
            @endif
        </li>
    </ul>
</div>
