<div class="row" id="ship-box-info" @if (!$isAddressChange) style="display: none;" @endif>
    <div class="col-lg-12">
        <div class="country-select">
            <label>Country <span class="required">*</span></label>
            <select name="shipping_country" required_if>
                <option value="IN">India</option>
            </select>
            @include('layouts.includes.validation-error', ['element' => 'shipping_country'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>First Name <span class="required">*</span></label>
            <input type="text" name="shipping_first_name" placeholder="" required_if autofocus value="{{ $shippingAddress->first_name ?? $user->first_name }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_first_name'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Last Name <span class="required">*</span></label>
            <input type="text" name="shipping_last_name" placeholder="" required_if value="{{ $shippingAddress->last_name ?? $user->last_name }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_last_name'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <label>Address <span class="required">*</span></label>
            <input type="text" placeholder="Street address" name="shipping_address" required_if value="{{ $shippingAddress->address }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_address'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="shipping_street" value="{{ $shippingAddress->street }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_street'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <label>Town / City <span class="required">*</span></label>
            <input type="text" placeholder="Town / City" name="shipping_city" required_if value="{{ $shippingAddress->city }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_city'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>State / County <span class="required">*</span></label>
            <input type="text" placeholder="" name="shipping_state" required_if value="{{ $shippingAddress->state }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_state'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Postcode / Zip <span class="required">*</span></label>
            <input type="text" placeholder="Postcode / Zip" name="shipping_postal_code" required_if value="{{ $shippingAddress->postal_code }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_postal_code'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Email Address <span class="required">*</span></label>
            <input type="email" placeholder="" name="shipping_email" required_if value="{{ $shippingAddress->email ?? $user->email }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_email'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Phone <span class="required">*</span></label>
            <input type="text" placeholder="Phone" name="shipping_phone" required_if value="{{ $shippingAddress->phone ?? $user->phone }}"/>
            @include('layouts.includes.validation-error', ['element' => 'shipping_phone'])
        </div>
    </div>
</div>
