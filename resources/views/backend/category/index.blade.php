@extends('layout')
@section('meta_desc',$meta_desc)
@section('title',$title)
@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <h1>Dashboard</h1>
      {{-- <a href="{{url('admin/dashboard')}}"><h1>Dashboard</h1></a> --}}
    </li>
    <li class="breadcrumb-item active">Category</li>
  </ol>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Categories
      <a href="{{url('admin/category/create')}}" class="float-right btn btn-sm btn-dark">Add Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->title}}</td>
                <td><img src="{{ asset('imgs').'/'.$cat->image }}" height="50" class="rounded mx-auto d-block"/></td>
                <td>
                  <div class="d-flex justify-content-center">
                  <a class="btn btn-outline-danger btn-sm mr-2" href="{{url('admin/category/'.$cat->id.'/edit')}}">Update</a>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-dark btn-sm" href="{{url('admin/category/'.$cat->id.'/delete')}}">Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  </div>

</div>
<!-- /.container-fluid -->
@endsection
