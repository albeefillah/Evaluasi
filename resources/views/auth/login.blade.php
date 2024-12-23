@section('title') 
SiARTUR - Login
@endsection
@extends('layouts.main')
@section('style')
<link rel="shortcut icon" href="{{ asset('assets/images/icon.ico') }}">
@endsection
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">
    <!-- Start Container -->
    <div class="container">
        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">
                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="{{url('/')}}" class="xp-web-logo"><img src="{{ asset('assets/images/logo-ppsdm-tr.png') }}" height="40" alt="logo"></a>
                            </h3>
                            <div class="p-3">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">LOGIN</h4>
                                        <p class="text-muted">Sistem Informasi Aparatur</p>
                                    </div>                                        
                                    
                                    <div class="login-or">
                                      
                                    </div>
                                    <div class="form-group">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="username" required autocomplete="username" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input  id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('pasword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="remember">Ingat Saya</label>
                                            </div>                                
                                        </div>
                                        <div class="form-group col-6 text-right">
                                          <label class="forgot-psw"> 
                                            <a id="forgot-psw" href="{{ route('password.request') }}">Lupa Password?</a>
                                          </label>
                                        </div>
                                    </div>                          
                                  <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End XP Auth Box -->
            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@section('script')

@endsection 