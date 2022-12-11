<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Sign Up</h2>
                    <!-- <p>
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br />
                        inventore veritatis et quasi architecto beat
                    </p> -->
                </div>
            </div>
            <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="billing-fields">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-register">
                              <label>First Name<span>*</span></label>
                              <input id="first_name" type="text" class="@error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                              @error('first_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-register">
                                <label>Last Name<span>*</span></label>
                                <input id="last_name" type="text" class="@error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-register">
                                <label>Email Address<span>*</span></label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-register">
                                <label>Phone<span>*</span></label>
                                <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="single-register">
                        <label>Account password<span>*</span></label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="single-register">
                        <label>Confirm password<span>*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="single-register single-register-3">
                        <input id="terms_and_conditions" type="checkbox" name="terms_and_conditions" class="@error('terms_and_conditions') is-invalid @enderror" required/>

                        <label class="inline" for="terms_and_conditions">I agree <a href="#">Terms &amp; Condition</a></label>

                        @error('terms_and_conditions')
                          <br>
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="single-register">
                        <button type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
