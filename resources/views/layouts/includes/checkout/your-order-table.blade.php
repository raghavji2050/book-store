<div class="your-order-table table-responsive">
    <table>
        <thead>
            <tr>
                <th class="product-name">Product</th>
                <th class="product-total">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartCollection as $cart)
              <tr class="cart_item">
                  <td class="product-name">{{ $cart->name }} <strong class="product-quantity"> × {{ $cart->quantity }}</strong></td>
                  <td class="product-total">
                      <span class="amount">₹{{ $cart->quantity * $cart->price }}</span>
                  </td>
                  @endforeach
              </tr>
        </tbody>
        <tfoot>
            <tr class="cart-subtotal">
                <th>Cart Subtotal</th>
                <td><span class="amount">₹{{ Cart::getSubTotal() }}</span></td>
            </tr>
            <!-- <tr class="shipping">
                <th>Shipping</th>
                <td>
                    <ul>
                        <li>
                            <input type="radio" />
                            <label> Flat Rate: <span class="amount">£7.00</span> </label>
                        </li>
                        <li>
                            <input type="radio" />
                            <label>Free Shipping:</label>
                        </li>
                        <li></li>
                    </ul>
                </td>
            </tr> -->
            <tr class="order-total">
                <th>Order Total</th>
                <td>
                    <strong><span class="amount">₹{{ Cart::getTotal() }}</span></strong>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
