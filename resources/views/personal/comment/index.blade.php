@extends('personal.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Comments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>title</th>
                <th>content</th>
                <th colspan="2" class="text-center">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comments as $comment)
              <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->message}}</td>
                <td><a href="{{route('personal.comment.edit', $comment->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
                <td>
                  <form action="{{route('personal.liked.delete', $comment->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash-alt text-danger" role="button"></i></button>
                  </form>
                </td>
              </tr>
            </tbody> --}}
            @endforeach
          </table>
        </div>
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection