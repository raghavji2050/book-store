<div class="row">
    <div class="col-lg-12">
        <div class="country-select">
            <label>Country <span class="required">*</span></label>
            <select name="billing_country" required>
                <option value="india">India</option>
            </select>
            @include('layouts.includes.validation-error', ['element' => 'billing_country'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>First Name <span class="required">*</span></label>
            <input type="text" name="billing_first_name" placeholder="" required autofocus value="{{ $billingAddress->first_name ?? $user->first_name  }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_first_name'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Last Name <span class="required">*</span></label>
            <input type="text" name="billing_last_name" placeholder="" required value="{{ $billingAddress->last_name ?? $user->last_name }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_last_name'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <label>Address <span class="required">*</span></label>
            <input type="text" placeholder="Street address" name="billing_address" required value="{{ $billingAddress->address }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_address'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="billing_street" value="{{ $billingAddress->street }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_street'])
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="checkout-form-list">
            <label>Town / City <span class="required">*</span></label>
            <input type="text" placeholder="Town / City" name="billing_city" required value="{{ $billingAddress->city }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_city'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>State / County <span class="required">*</span></label>
            <input type="text" placeholder="" name="billing_state" required value="{{ $billingAddress->state }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_state'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Postcode / Zip <span class="required">*</span></label>
            <input type="text" placeholder="Postcode / Zip" name="billing_postal_code" required value="{{ $billingAddress->postal_code }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_postal_code'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Email Address <span class="required">*</span></label>
            <input type="email" placeholder="" name="billing_email" required value="{{ $billingAddress->email ?? $user->email }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_email'])
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <div class="checkout-form-list">
            <label>Phone <span class="required">*</span></label>
            <input type="text" placeholder="Phone" name="billing_phone" required value="{{ $billingAddress->phone ?? $user->phone }}"/>
            @include('layouts.includes.validation-error', ['element' => 'billing_phone'])
        </div>
    </div>
</div>
