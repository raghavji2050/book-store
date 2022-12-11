@php
  $totalQuantity = Cart::getTotalQuantity();
  $cartCollection = Cart::getContent();
@endphp

<div class="col-lg-12 col-md-12 col-12">
    <div class="your-order">
        <h3>Your order</h3>
        @include('layouts.includes.checkout.your-order-table')
        @include('layouts.includes.checkout.payment-method')
    </div>
</div>
