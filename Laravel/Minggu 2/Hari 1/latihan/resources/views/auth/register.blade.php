@extends('layout.template.auth')
@section('content')
  <!-- Sign up form -->
        <section class="signup" style="margin-top: 8%">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="/postregister" class="register-form" id="register-form">
                            @csrf
                            <input type="hidden" class="hidden" value="user" name="role" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/ value="{{old('name')}}">
                            </div>
                            @error('name')
                                <div class="invalid-feedback mt-2" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/ value="{{old('email')}}">

                            </div>
                            @error('email')
                                <div class="invalid-feedback" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            @error('password')
                                <div class="invalid-feedback " style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            @if (session('status'))
                            <div class="alert alert-danger" style="margin-top: -8%">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password2" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agreeterm" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            @if (session('status1'))
                            <div class="alert alert-danger text-danger" style="margin-top: -8%">
                                {{ session('status1') }}
                            </div>
                            @endif
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('Admin/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

