@extends('layouts.app')
@section('content')
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <img src="images/logo-white-432x105.png" class="bg-image__logo">
        </div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
            <div class="container">
                <div class="login-back">
                    <a href="{{ asset('login') }}" class="text-decoration-none text-login-back fw-bold">
                    <i class="fa-sharp fa-solid fa-circle-left" style="margin-right: 7px;"></i>
                    {{ __('ĐĂNG NHẬP') }}
                    </a>
                </div>
                
                <div class="title-login">
                    <img src="images/logo-full-428x104.png" class="logo-title-login">
                    <p class="text-title-login fw-bold">{{ __('Chào mừng bạn đã đến với EI Germany!') }}</p>
                </div>
                <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                    <form action="{{route('register-user')}}" method="post">
                        @csrf
                        <div class="form mb-3">
                            <i class="fa-solid fa-user-tie input-icon"></i>
                            <input type="text" class="form-control margin-left" id="login_name" placeholder="Họ và tên" name='name' value="{{old('name')}}">
                        </div>

                        <div class="form mb-3">
                            <i class="fa fa-envelope-o input-icon"></i>
                            <input type="text" class="form-control margin-left" id="user_infor" placeholder="Email" name='email' value="{{old('email')}}">
                        </div>

                        <div class="form mb-3">
                            <i class="fa fa-lock input-icon"></i>
                            <input type="password" class="form-control margin-left" id="user_password" placeholder="Mật khẩu" name='password'>
                            <i class="fa-regular fa-eye-slash input-icon-1" onclick="showPassword()"></i>
                        </div>

                        <div class="form mb-3">
                            <i class="fa-solid fa-check input-icon"></i>
                            <input type="password" class="form-control margin-left" id="user_passwordconfirm" placeholder="Xác nhận mật khẩu" name='confirmpass'>
                            <i class="fa-regular fa-eye-slash input-icon-1"></i>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" onclick="register()">{{ __('Đăng ký') }}</button>
                        </div>
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
