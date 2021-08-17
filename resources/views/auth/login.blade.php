@extends('frontlayout')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Login') }}</div>

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
            </div>
        </div>
    </div>
</div>
{{-- Footer --}}
<footer class="footer">
  <div class="container">
    {{--  --}}
<!-- Grid row-->
<div class="row mt-5">

  <!-- Grid column -->
  <div class="col-md-12 py-3">
    <div class="mb-2 d-flex justify-content-center">

      <!-- Facebook -->
      <a class="fb-ic" style="color:black">
        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
      </a>
      <!-- Twitter -->
      <a class="tw-ic" style="color:black">
        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
      </a>
      <!-- Google +-->
      <a class="gplus-ic" style="color:black">
        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
      </a>
      <!--Linkedin -->
      <a class="li-ic" style="color:black">
        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
      </a>
      <!--Instagram-->
      <a class="ins-ic" style="color:black">
        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
      </a>
      <!--Pinterest-->
      <a class="pin-ic" style="color:black">
        <i class="fab fa-pinterest fa-lg white-text fa-lg"> </i>
      </a>
    </div>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row-->

</div>


<!-- Copyright -->
<div class="text-center py-3">
<small class="text-muted">SMU PCWEB7:
<a href="mailto: vince.ding@gmail.com" class="text-muted text-decoration-none">VINCE DING</a>
</small>
</div>
<!-- Copyright -->
    {{--  --}}
  </div>
</footer>
{{-- Footer --}}

<!-- fontawesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
