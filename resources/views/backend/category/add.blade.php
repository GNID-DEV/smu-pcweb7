
@extends('layout')
@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <h1>Dashboard</h1>
      {{-- <a href="{{url('admin/dashboard')}}"><h1>Dashboard</h1></a> --}}
    </li>
    <li class="breadcrumb-item active">Category / Create</li>
  </ol>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Add Category
      <a href="{{url('admin/category')}}" class="float-right btn btn-sm btn-dark">All Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        @if($errors)
          @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
          @endforeach
        @endif

        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif

        <form method="post" action="{{url('admin/category')}}" enctype="multipart/form-data">
          @csrf
          <table class="table table-bordered">
              <tr>
                  <th>Title</th>
                  <td><input type="text" name="title" class="form-control" /></td>
              </tr>
              <tr>
                  <th>Detail</th>
                  <td><input type="text" name="detail" class="form-control" /></td>
              </tr>
              <tr>
                  <th>Image</th>
                  <td><input type="file" name="cat_image" /></td>
              </tr>
              <tr>
                  <td colspan="2">
                      <input type="submit" class="btn btn-primary" />
                  </td>
              </tr>
          </table>
        </form>
      </div>
    </div>
    
  </div>

</div>
<!-- /.container-fluid -->

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

      