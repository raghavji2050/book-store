@php
  $totalQuantity = Cart::getTotalQuantity();
  $cartCollection = Cart::getContent();
@endphp

<div class="cart-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-content table-responsive mb-15 border-1">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cartCollection as $cart)
                              <tr>
                                  <td class="product-thumbnail">
                                      <a href=""><img src="{{ $cart->attributes['image'] }}" alt="man" /></a>
                                  </td>
                                  <td class="product-name"><a href="#">{{ $cart->name }}</a></td>
                                  <td class="product-price"><span class="amount">₹{{ $cart->attributes['unitPrice'] }}</span></td>
                                  <td class="product-quantity">
                                    <input type="number" value="{{ $cart->quantity }}" class="update-to-cart" data-book-id="{{ $cart->id }}" />
                                  </td>
                                  <td class="product-subtotal">₹{{ $cart->quantity * $cart->price }}</td>
                                  <td class="product-remove">
                                      <a href="javascript:void(0)" class="remove-from-cart" data-book-id="{{ $cart->id }}"><i class="fa fa-remove"></i></a>
                                  </td>
                              </tr>
                            @empty
                              <tr>
                                <td colspan="6">
                                  No Product in cart
                                </td>
                              </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="buttons-cart mb-30">
                    <ul>
                        <!-- <li><a href="#">Update Cart</a></li> -->
                        <li><a href="{{ route('home') }}">Continue Shopping</a></li>
                    </ul>
                </div>
                <!-- <div class="coupon">
                    <h3>Coupon</h3>
                    <p>Enter your coupon code if you have one.</p>
                    <form action="#">
                        <input type="text" placeholder="Coupon code" />
                        <a href="#">Apply Coupon</a>
                    </form>
                </div> -->
            </div>
            @if ($totalQuantity)
              <div class="col-lg-4 col-md-6 col-12">
                  <div class="cart_totals">
                      <h2>Cart Totals</h2>
                      <table>
                          <tbody>
                              <tr class="cart-subtotal">
                                  <th>Subtotal</th>
                                  <td>
                                      <span class="amount">₹{{ Cart::getSubTotal() }}</span>
                                  </td>
                              </tr>
                              <!-- <tr class="shipping">
                                  <th>Shipping</th>
                                  <td>
                                      <ul id="shipping_method">
                                          <li>
                                              <input type="radio" />
                                              <label>
                                                  Flat Rate:
                                                  <span class="amount">£7.00</span>
                                              </label>
                                          </li>
                                          <li>
                                              <input type="radio" />
                                              <label> Free Shipping </label>
                                          </li>
                                      </ul>
                                      <a href="#">Calculate Shipping</a>
                                  </td>
                              </tr> -->
                              <tr class="order-total">
                                  <th>Total</th>
                                  <td>
                                      <strong>
                                          <span class="amount">₹{{ Cart::getTotal() }}</span>
                                      </strong>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      <div class="wc-proceed-to-checkout">
                          <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                      </div>
                  </div>
              </div>
            @endif
        </div>
    </div>
</div>
