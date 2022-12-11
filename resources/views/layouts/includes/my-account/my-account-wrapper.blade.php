@php
  $user = auth()->user();
@endphp

<div class="my-account-wrapper mb-70">
    <div class="container">
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-bs-toggle="tab" aria-selected="true" role="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                                    <a href="#orders" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                    <!-- <a href="#download" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cloud-download"></i> Download</a> -->
                                    <!-- <a href="#payment-method" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-credit-card"></i> Payment Method</a> -->
                                    <a href="#address-edit" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-map-marker"></i> address</a>
                                    <a href="#account-info" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-user"></i> Account Details</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="fa fa-sign-out"></i> Logout
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                    </a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Dashboard</h5>
                                            <div class="welcome">
                                                <p>
                                                  Hello, <strong>{{ $user->full_name }}</strong></p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Orders</h5>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <!-- <th>Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($orders as $order)
                                                        <tr>
                                                            <td>{{ $order->id }}</td>
                                                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                            <td>{{ $order->status }}</td>
                                                            <td>₹{{ $order->total }}</td>
                                                            <!-- <td><a href="cart.html" class="btn btn-sqr">View</a></td> -->
                                                        </tr>
                                                        @empty
                                                          <tr>
                                                            <td colspan="5"></td>
                                                          </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Downloads</h5>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Haven - Free Real Estate PSD Template</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sqr"><i class="fa fa-cloud-download"></i> Download File</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>HasTech - Profolio Business Template</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sqr"><i class="fa fa-cloud-download"></i> Download File</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Payment Method</h5>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Billing Address</h5>
                                            @if ($billingAddress)
                                              <address>
                                                  <p><strong>{{ $billingAddress->full_name }}</strong></p>
                                                  <p>
                                                      {{ $billingAddress->address }}<br />
                                                      {{ $billingAddress->city }}, {{ $billingAddress->state }} {{ $billingAddress->postal_code }}
                                                  </p>
                                                  <p><b>Mobile:</b> {{ $billingAddress->phone }}</p>
                                                  <p><b>Email:</b> {{ $billingAddress->email }}</p>
                                              </address>
                                            @endif
                                            <!-- <a href="#" class="btn btn-sqr"><i class="fa fa-edit"></i> Edit Address</a> -->
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Account Details</h5>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="first-name" class="required">First Name</label>
                                                                <input type="text" id="first-name" placeholder="First Name" value="{{ $user->first_name }}" disabled/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="last-name" class="required">Last Name</label>
                                                                <input type="text" id="last-name" placeholder="Last Name" value="{{ $user->last_name }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Email Address</label>
                                                        <input type="email" id="email" placeholder="Email Address" value="{{ $user->email }}" disabled/>
                                                    </div>
                                                    <!-- <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="single-input-item">
                                                            <label for="current-pwd" class="required">Current Password</label>
                                                            <input type="password" id="current-pwd" placeholder="Current Password" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="new-pwd" class="required">New Password</label>
                                                                    <input type="password" id="new-pwd" placeholder="New Password" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item">
                                                        <button class="btn btn-sqr">Save Changes</button>
                                                    </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</div>
