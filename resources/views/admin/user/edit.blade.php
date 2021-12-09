@extends('admin.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">user: {{$user->id}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
              <li class="breadcrumb-item">{{$user->name}}</li>
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
          <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="col-4">
            @csrf
            @method('patch')
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Enter name of user"
              value="{{$user->name}}">
              @error('name')
                  <div class="text-danger">this field cannot be empty</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
              @error('email')
                  <div class="text-danger">this email alredy use</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Select user role</label>
              <select class="form-control" name="role">
                @foreach ($roles as $id => $role)
                <option value="{{$id}}"
                  {{$id == $user->role ? 'selected':''}}>{{$role}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="hidden" name="user_id" value="{{$user->id}}">
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