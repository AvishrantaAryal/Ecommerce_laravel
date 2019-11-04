@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('public/cd-admin/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{('public/cd-admin/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/cd-admin/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                 
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-43">
                        Login to continue
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    
            

                    <div class="container-login100-form-btn">
                        <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                    </div>
                    
                    

                    
                </form>

                <div class="login100-more" style="background-image: url('public/cd-admin/login/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>
    
    

    
    
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('public/cd-admin/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('public/cd-admin/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/cd-admin/login/js/main.js')}}"></script>




</body>
</html>
    
            <!-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->

 
@endsection
