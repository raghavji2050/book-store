<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Login</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
              <form method="POST" action="{{ route('login') }}">
                <div class="login-form">
                    @csrf
                    <div class="single-login">
                        <label>Username or email<span>*</span></label>

                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="single-login">
                        <label>Passwords <span>*</span></label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="single-login single-login-2">
                        <button type="submit">
                            {{ __('Login') }}
                        </button>
                        <input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember me</span>
                    </div>
                    <a href="#">Lost your password?</a>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
