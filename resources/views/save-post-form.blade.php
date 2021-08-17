@extends('frontlayout')
@section('title','Save Post')
@section('content')
		<div class="row">
			<div class="col-md-8 mb-5">
				<h3>Add Post</h3>
				<div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('save-post-form')}}" enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>Category<span class="text-danger">*</span></th>
                          <td>
                            <select class="form-control" name="category">
                              @foreach($cats as $cat)
                              <option value="{{$cat->id}}">{{$cat->title}}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <th>Title<span class="text-danger">*</span></th>
                          <td><input type="text" name="title" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>Thumbnail</th>
                          <td><input type="file" name="post_thumb" /></td>
                      </tr>
                      <tr>
                          <th>Full Image</th>
                          <td><input type="file" name="post_image" /></td>
                      </tr>
                      <tr>
                          <th>Detail<span class="text-danger">*</span></th>
                          <td>
                            <textarea class="form-control" name="detail"></textarea>
                          </td>
                      </tr>
                      <tr>
                          <th>Tags</th>
                          <td>
                            <textarea class="form-control" name="tags"></textarea>
                          </td>
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
			<!-- Right SIdebar -->
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
								<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
				<!-- Popular Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						@if($popular_posts)
							@foreach($popular_posts as $post)
								<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}} <span class="badge badge-info float-right">{{$post->views}}</span></a>
							@endforeach
						@endif
					</div>
				</div><!-- Popular Posts -->
			</div>
		</div><!-- Right SIdebar -->

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