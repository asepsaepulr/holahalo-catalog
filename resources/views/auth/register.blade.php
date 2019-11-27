<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laravel</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/iconfonts/puse-icons-feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body background="{{ asset('/img/1.jpg') }}" alt="">

  <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="container-scroller">
      <div class="container-fluid  auth-page">
        <div class="align-items-center auth theme-one">
          <div class="row w-100">
            <div class="col-md-12" style="margin-bottom: 150px;">
            </div>
            <div class="col-lg-4 mx-auto">
              <h2 style="text-align: center ;"></h2>
              <div class="auto-form-wrapper">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label class="label">Name</label>
                      <div class="input-group">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline text-success"></i>
                        </span>
                    </div>
                </div>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="label">Email</label>
              <div class="input-group">
                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline text-success"></i>
                </span>
            </div>
        </div>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label class="label">Password</label>
      <div class="input-group">
        <input id="password" type="password" class="form-control" name="password" required>
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline text-success"></i>
        </span>
    </div>
    @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <label for="password-confirm">Password Confirm</label>
  <div class="input-group">
    <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation" required>
    <span id='message'></span>
    <div class="input-group-append">
      <span class="input-group-text">
        <i class="mdi mdi-check-circle-outline text-success"></i>
    </span>
</div>
</div>
</div>
<div class="form-group">
  <button class="btn btn-primary submit-btn btn-block" type="submit">Register</button>
  <a href="{{url()->previous() }}" class="btn btn-primary submit-btn btn-block">Back</a>
</div>
</div>
<p class="footer-text text-center" style="margin-top: 20px;color: white"></p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- content-wrapper ends Herziwp@gmail.com -->
</div>
<!-- page-body-wrapper ends -->
</div>

<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
</body>

</html> 