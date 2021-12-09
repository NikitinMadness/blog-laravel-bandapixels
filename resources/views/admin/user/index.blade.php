@extends('admin.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
          <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary mb-3">add</a>
        </div>
        <div class="row">
          <div class="col-12">
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th colspan="2" class="text-center">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td><a href="{{route('admin.user.show', $user->id)}}"><i class="far fa-eye"></i></a></td>
                <td><a href="{{route('admin.user.edit', $user->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
                <td>
                  <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash-alt text-danger" role="button"></i></button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection