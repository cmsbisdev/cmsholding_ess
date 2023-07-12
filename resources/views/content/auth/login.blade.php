@extends('layouts.onepage')

@section('title', 'Login')

@section('content')

  <!-- Content -->
  <div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
      <!-- /Left Text -->
      <div class="col-lg-7 col-xl-8 px-0 d-none d-sm-block">
          <img src="{{ asset('assets/sneat/') }}/assets/img/illustrations/siap.png" alt="Login image" class="w-100 vh-100" style="object-position: left;" data-app-dark-img="illustrations/siap.png" data-app-light-img="illustrations/siap.png">
      </div>
      <!-- /Left Text -->

      <!-- Login -->
      <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <!-- Logo -->
          <div class="app-brand mb-5">
            <a href="#" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/') }}/logo/cms.png" style="width:62px;" alt="">
              </span>
              <span class="app-brand-text demo text-body fw-bolder">Employee Self Service</span>
            </a>
          </div>
          @if (session()->has('Wrong'))
            <div class="alert alert-danger alert-dismissable fade show align-items-between" role="alert">
                {{ session('Wrong') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @elseif (session()->has('Inactive'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                {{ session('Inactive') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to ESS! 👍</h4>
          <p class="mb-4">Please sign-in to your account</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" id="email" name="username" value="{{ old('username') }}" placeholder="Enter your username" autofocus>
                @error('username')
                    <span class="alert text-danger text-sm">*{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="auth-forgot-password-cover.html">
                    <small>Forgot Password?</small>
                    </a> --}}
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('password')
                    <span class="alert text-danger text-sm">*{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me">
                    <label class="form-check-label" for="remember-me">
                    Remember Me
                    </label>
                </div>
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit">
                Sign in
                </button>
            </form>

        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
  <!-- / Content -->

@endsection
