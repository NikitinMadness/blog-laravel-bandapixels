@extends('admin.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$category->title}} <td><a href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pen"></i></a></td></h1>
            <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash-alt text-danger" role="button"></i></button>
            </form>
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
        <div class="col-1">
        </div>
        <div class="row">
          <div class="col-12">
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <tbody>
              <tr>
                <td>id</td>
                <td>{{$category->id}}</td>
                <td><a href="#">test</a></td>
              </tr>
              <tr>
                <td>name</td>
                <td>{{$category->title}}</td>
                <td><a href="#">test</a></td>
              </tr>
          </table>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection