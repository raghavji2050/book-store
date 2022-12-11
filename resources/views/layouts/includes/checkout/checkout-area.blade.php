@php
  $user = auth()->user();
@endphp
<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="row">
                  @if (!session()->has('checkout_step'))
                    @include('layouts.includes.checkout.billing-details')
                  @else

                    @include('layouts.includes.checkout.your-order')
                  @endif
              </div>
            </div>
        </div>
    </div>
</div>
