@php
  $isAddressChange = $billingAddress && $shippingAddress && $billingAddress->address != $shippingAddress->address;
@endphp

<div class="col-md-12 col-12">
    <form action="{{ route('checkout.store') }}" method="post">
      @csrf
      <div class="checkbox-form">
        <h3>Billing Details</h3>
        @include('layouts.includes.checkout.billing-form')
        <div class="different-address">
            <div class="ship-different-title">
                <h3>
                    <label>Ship to a different address?</label>
                    <input type="checkbox" id="ship-box" name="ship_different_address" @if($isAddressChange) checked @endif/>
                </h3>
            </div>
            @include('layouts.includes.checkout.shipping-form')

            <button type="submit" class="btn btn-sqr float-end m-0">Pay for Order</button>
        </div>
    </div>
    </form>
</div>
