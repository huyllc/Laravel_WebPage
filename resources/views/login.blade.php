@extends('layouts.app')
@section('content')
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <img src="{{ asset('images/logo-white-432x105.png') }}" class="bg-image__logo">
          </div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="login-back">
                    <a href="#!" class="text-decoration-none text-login-back fw-bold">
                      <i class="fa-sharp fa-solid fa-circle-left" style="margin-right: 7px;"></i>
                      {{ __('ĐĂNG NHẬP') }}
                    </a>
                  </div>
                  
                <div class="title-login">
                    <img src="{{ asset('images/logo-full-428x104.png') }}" class="logo-title-login">
                    <p class="text-title-login fw-bold">{{ __('Chào mừng bạn đã đến với EI Germany!') }}</p>
                </div>
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <form>
                        @csrf
                        <div class="form mb-3">
                            <i class="fa fa-envelope-o input-icon"></i>
                            <input type="text" class="form-control margin-left" id="login_id" placeholder="{{ __('Email/Số điện thoại') }}">
                        </div>

                        <div class="form mb-3">
                            <i class="fa fa-lock input-icon"></i>
                            <input type="password" class="form-control margin-left" id="user_password" placeholder="{{ __('Mật khẩu') }}">
                            <i class="fa-regular fa-eye-slash input-icon-1" onclick="showPassword()"></i>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" onclick="check()">{{ __('Đăng nhập') }}</button>
                        </div>
                        <a href="{{ asset('forgot') }}" class="forgetPassword text-decoration-none text-dark fw-bold">{{ __('Quên mật khẩu?') }}</a>
                        <a href="{{ asset('register') }}" class="registerAccount fw-bold text-decoration-none text-dark">{{ __('Đăng ký') }}</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
@endsection
