@include('users/includes/header_')
<style>
    .red{
        color:red;
    }
</style>
        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="d-icon-home"></i> Home</a></li>
                        <li>Sign in</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mt-6 pb-2 mb-10">
                <div class="container">
                    <div class="login-popup">
                        <div class="form-box">
                            <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                                    </li>
                                    <li class="delimiter">or</li>
                                    <li class="nav-item">
                                        <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="signin">
                                        <form method="POST" action="/login">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control" id="singin-email"
                                                    name="email" placeholder="Email Address *"
                                                     />
                                                <p class="red">{{$errors->first('email')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="singin-password"
                                                    name="password" placeholder="Password *"  />
                                                <p class="red">{{$errors->first('password')}}</p>
                                            </div>
                                            <div class="form-footer">
                                                <div class="form-checkbox">
                                                    <input type="checkbox" class="custom-checkbox" id="signin-remember"
                                                        name="signin-remember" />
                                                    <label class="form-control-label" for="signin-remember">Remember
                                                        me</label>
                                                </div>
                                                <a href="/forgot-password" class="lost-link">Lost your password?</a>
                                            </div>
                                            <button class="btn btn-dark btn-block btn-rounded"
                                                type="submit">Login</button>
                                        </form>
                                        <div class="form-choice text-center">
                                            <label class="ls-m">or Login With</label>
                                            <div class="social-links">
                                                <a href="#"
                                                    class="social-link social-google fab fa-google border-no"></a>
                                                <a href="#"
                                                    class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                <a href="#"
                                                    class="social-link social-twitter fab fa-twitter border-no"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input value="{{ old('fname')}}" type="text" class="form-control" id="register-fname"
                                                    name="fname" placeholder="FullName*" required  />
                                                <p class="red">{{$errors->first('fname')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input value="{{ old('name')}}" type="text" class="form-control" id="register-name"
                                                    name="name" placeholder="Username *" required  />
                                                <p class="red">{{$errors->first('name')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input value="{{ old('email')}}" type="email" class="form-control" id="register-email"
                                                    name="email" placeholder="Email *" required  />
                                                <p class="red">{{$errors->first('email')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input value="{{ old('phone')}}" type="number" class="form-control" id="register-phone"
                                                    name="phone" placeholder="Phone Number *" required  />
                                                <p class="red">{{$errors->first('phone')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input value="{{ old('address')}}" type="text" class="form-control" id="register-address"
                                                    name="address" placeholder="Address *" required  />
                                                <p class="red">{{$errors->first('address')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input value="{{ old('dob')}}" type="date" class="form-control" id="register-dob"
                                                    name="dob" placeholder="Date of Birth *" required  />
                                                <p class="red">{{$errors->first('dob')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="register-password"
                                                    name="password" placeholder="Password *" required  />
                                                <p class="red">{{$errors->first('password')}}</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="register-cpass"
                                                    name="confPass" placeholder="Confirm Password *" required  />
                                                <p class="red">{{$errors->first('confPass')}}</p>
                                            </div>
                                            <div class="form-footer">
                                                <div class="form-checkbox">
                                                    <input type="checkbox" class="custom-checkbox" id="register-agree"
                                                        name="agreed" required  />
                                                    <label class="form-control-label" for="register-agree">I agree to
                                                        the
                                                        privacy policy</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-dark btn-block btn-rounded"
                                                type="submit">Register</button>
                                        </form>
                                        <div class="form-choice text-center">
                                            <label class="ls-m">or Register With</label>
                                            <div class="social-links">
                                                <a href="#"
                                                    class="social-link social-google fab fa-google border-no"></a>
                                                <a href="#"
                                                    class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                <a href="#"
                                                    class="social-link social-twitter fab fa-twitter border-no"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        @include('users/includes/footer')