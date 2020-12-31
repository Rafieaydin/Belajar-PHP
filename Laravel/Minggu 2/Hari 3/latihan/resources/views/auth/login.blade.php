@extends('layout.template.auth')
@section('content')
<section class="sign-in" style="margin-top: 8%">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('Admin/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login </h2>

                        <form method="POST" action="/postlogin" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Name"/ value="{{old('email')}}">
                            </div>
                            @error('email')
                                <div class="invalid-feedback mt-2" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            @error('password')
                                <div class="invalid-feedback mt-2" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            @if (session('status'))
                            <div class="alert alert-danger" style="margin-top: -8%">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="checkbox" name="rememberme" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection

