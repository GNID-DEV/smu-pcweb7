<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WLBB Admin Login</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" />
    {{-- <link href="{{asset('backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend')}}/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-white">

    <div class="container">
      
      {{-- WLBB Logo --}}
      <div class="mt-5 d-flex justify-content-center">
        <img src="{{asset('imgs')}}/wlbb_logo.svg" height="80">
      </div>
      
      {{-- Heading --}}
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-white mt-2"><h4>Admin Login</h4></div>
        
        {{-- Check if errors --}}
        <div class="card-body">
          @if($errors)
            @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif

          @if(Session::has('error'))
          <p class="text-danger">{{session('error')}}</p>
          @endif

          <form method="post">
            @csrf
            
            {{-- Username --}}
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" />
                <label for="inputEmail">Username</label>
              </div>
            </div>

            {{-- Password --}}
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" />
                <label for="inputPassword">Password</label>
              </div>
            </div>

            {{-- Submit Btn --}}
            <input type="submit" class="btn btn-outline-success btn-block" />
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
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
</html>
