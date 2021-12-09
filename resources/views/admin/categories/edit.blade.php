@extends('admin.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit category {{$category->id}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category</a></li>
              <li class="breadcrumb-item">{{$category->title}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            
          </div>
          <form action="{{route('admin.category.update', $category->id)}}" method="POST" class="col-4">
            @csrf
            @method('patch')
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Enter name of category"
              value="{{$category->title}}">
              @error('title')
                  <div class="text-danger">this field cannot be empty</div>
              @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="edit">
          </form>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection