@extends('frontlayout')
@section('title','All Categories')
@section('content')
<!-- Lobang Wanted Area -->
<div class="container">
  <!-- Lobang Heading -->
  <div class="mb-5">
    <h1 class="mb-0">Lobang Categories!</h1>
    <p>Find lobang in category</p>
  </div>
{{--  --}}
<div class="row">
  <div class="col-lg-12">
    <div class="row mb-5"> 
      @if(count($categories)>0)
        @foreach($categories as $category)
        
        {{--  --}}
        <div class="col-md-4 mb-4">
          <div class="card rounded-lg" style="height: 12rem;">
            <div class="my-auto">
            {{-- Image --}}
            <a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}"><img src="{{asset('imgs/'.$category->image)}}" height="50" class="card-img-top mt-4" alt="{{$category->title}}" /></a>
            
            {{-- Title --}}
            <div class="card-body">
              <h5 class="card-title text-center"><a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}">{{$category->title}}</a></h5>
            </div>
            </div>
          </div>
        
        </div>
        @endforeach
        @else
        <p class="alert alert-danger">No Category Found</p>
        @endif
    </div>
    
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
      {{$categories->links()}}
    </div>
  </div>

  {{-- <!-- Right SIdebar -->
  <div class="col-md-4">
    <!-- Search -->
    <div class="card mb-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <form action="{{url('/')}}">
          <div class="input-group">
            <input type="text" name="q" class="form-control" />
            <div class="input-group-append">
              <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Recent Posts -->
    <div class="card mb-4">
      <h5 class="card-header">Recent Posts</h5>
      <div class="list-group list-group-flush">
        @if($recent_posts)
          @foreach($recent_posts as $post)
            <a href="#" class="list-group-item">{{$post->title}}</a>
          @endforeach
        @endif
      </div>
    </div>
    <!-- Popular Posts -->
    <div class="card mb-4">
      <h5 class="card-header">Popular Posts</h5>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item">Post 1</a>
        <a href="#" class="list-group-item">Post 2</a>
      </div>
    </div>
  </div> --}}
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
@endsection('content')