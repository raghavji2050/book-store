<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderProduct;
use Cart;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {

      $totalQuantity = Cart::getTotalQuantity();

      if (!$totalQuantity) {
        return redirect()->route('home');
      }

      if ($request->edit_address) {
        session()->forget('checkout_step');
      }

      $user = auth()->user();

      $billingAddress  = Address::where(['type' => 'billing_address', 'user_id' => $user->id])->first() ?? new Address();
      $shippingAddress = Address::where(['type' => 'shipping_address', 'user_id' => $user->id])->first() ?? new Address();

      $intent = $user->createSetupIntent([
        'description' => 'Software development services',
      ]);

      return view('checkout', compact('billingAddress', 'shippingAddress', 'intent'));
    }

    public function store(Request $request)
    {
      if (!session()->has('checkout_step')) {
        $this->handleAddress($request);

        return redirect()->route('checkout');
      } else {
        $user = auth()->user();
        $shippingAddress = Address::where(['type' => 'shipping_address', 'user_id' => $user->id])->first() ?? new Address();
        $paymentMethod = $request->payment_method;

        $user->createOrGetStripeCustomer();

        $user->addPaymentMethod($paymentMethod);

        try {
          $user->charge(Cart::getTotal(), $paymentMethod, [
            'description' => 'Software development services',
            'shipping' => [
              'name' => $user->full_name,
              'address' => [
                'line1' => $shippingAddress->address,
                'postal_code' => $shippingAddress->postal_code,
                'city' => $shippingAddress->city,
                'state' => $shippingAddress->state,
                'country' => $shippingAddress->state,
              ],
            ],
          ]);

          $this->storeCartToOrder();

          Cart::clear();

        } catch (\Exception $e) {
          return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }

        return redirect()->route('myAccount');
      }
    }

    private function handleAddress($request)
    {
      $validationRules = [];

      if ($request->ship_different_address) {
        $validationRules = [
          'shipping_country' => 'required',
          'shipping_first_name' => 'required',
          'shipping_last_name' => 'required',
          'shipping_address' => 'required',
          'shipping_street' => 'nullable',
          'shipping_city' => 'required',
          'shipping_state' => 'required',
          'shipping_postal_code' => 'required',
          'shipping_email' => 'required|email',
          'shipping_phone' => 'required',
        ];
      }

      $request->validate($validationRules + [
        'billing_country' => 'required',
        'billing_first_name' => 'required',
        'billing_last_name' => 'required',
        'billing_address' => 'required',
        'billing_street' => 'nullable',
        'billing_city' => 'required',
        'billing_state' => 'required',
        'billing_postal_code' => 'required',
        'billing_email' => 'required|email',
        'billing_phone' => 'required',
      ]);

      Address::updateOrCreate([
        'user_id' => auth()->user()->id,
        'type'    => 'billing_address',
      ], [
        'first_name' => $request->billing_first_name,
        'last_name'  => $request->billing_last_name,
        'address'    => $request->billing_address,
        'street'     => $request->billing_street,
        'city'       => $request->billing_city,
        'state'      => $request->billing_state,
        'postal_code' => $request->billing_postal_code,
        'email'       => $request->billing_email,
        'phone'       => $request->billing_phone,
      ]);

      Address::updateOrCreate([
        'user_id' => auth()->user()->id,
        'type'    => 'shipping_address',
      ], [
        'first_name' => $request->ship_different_address ? $request->shipping_first_name : $request->billing_first_name,
        'last_name'  => $request->ship_different_address ? $request->shipping_last_name : $request->billing_last_name,
        'address'    => $request->ship_different_address ? $request->shipping_address : $request->billing_address,
        'street'     => $request->ship_different_address ? $request->shipping_street : $request->billing_street,
        'city'       => $request->ship_different_address ? $request->shipping_city : $request->billing_city,
        'state'      => $request->ship_different_address ? $request->shipping_state : $request->billing_state,
        'postal_code' => $request->ship_different_address ? $request->shipping_postal_code : $request->billing_postal_code,
        'email'       => $request->ship_different_address ? $request->shipping_email : $request->billing_email,
        'phone'       => $request->ship_different_address ? $request->shipping_phone : $request->billing_phone,
      ]);

      session()->put('checkout_step', 1);
    }

    private function storeCartToOrder()
    {
      $cartCollection = Cart::getContent();

      $order = Order::create([
        'status'    => 'Pending',
        'user_id'   => auth()->user()->id,
        'sub_total' => Cart::getSubTotal(),
        'total' => Cart::getTotal(),
      ]);

      foreach ($cartCollection as $cart) {
        OrderProduct::create([
          'order_id' => $order->id,
          'book_id' => $cart->id,
          'quantity' => $cart->quantity,
          'unit_price' => $cart->price,
          'net_price' => $cart->price * $cart->quantity,
        ]);
      }
    }
}
