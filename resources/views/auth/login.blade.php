@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url({{asset('images/BG_WHITE.png')}});">
			<div class="wrap-login100 p-t-190 p-b-30">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
					<div class="mx-auto d-block">
                            <img src="{{ asset('images/logo.png') }}" style="max-width: 200px !important;">
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input id="email"class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">

                        @if (Route::has('password.request'))
						<a href="{{ route('password.request') }}" class="txt1">
							Forgot Username / Password?
						</a>
                        @endif
                        <div class="text-center w-full">
						<a class="txt1" href="{{ route('register') }}">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
@endsection

