<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {

      if ($request->edit_address) {
        session()->forget('checkout_step');
      }

      $billingAddress  = Address::where(['type' => 'billing_address', 'user_id' => auth()->user()->id])->first() ?? new Address();
      $shippingAddress = Address::where(['type' => 'shipping_address', 'user_id' => auth()->user()->id])->first() ?? new Address();

      return view('checkout', compact('billingAddress', 'shippingAddress'));
    }

    public function store(Request $request)
    {
      if (!session()->has('checkout_step')) {
        $this->handleAddress($request);

        return redirect()->route('checkout');
      } else {

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
        'first_name' => $request->shipping_first_name ?? $request->billing_first_name,
        'last_name'  => $request->shipping_last_name ?? $request->billing_last_name,
        'address'    => $request->shipping_address ?? $request->billing_address,
        'street'     => $request->shipping_street ?? $request->billing_street,
        'city'       => $request->shipping_city ?? $request->billing_city,
        'state'      => $request->shipping_state ?? $request->billing_state,
        'postal_code' => $request->shipping_postal_code ?? $request->billing_postal_code,
        'email'       => $request->shipping_email ?? $request->billing_email,
        'phone'       => $request->shipping_phone ?? $request->billing_phone,
      ]);

      session()->put('checkout_step', 1);
    }
}
