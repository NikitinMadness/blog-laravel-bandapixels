@extends('admin.layouts.main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add the post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Post</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.post.create')}}">Create</a></li>
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
          <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Enter name of post">
              @error('title')
                  <div class="text-danger">this field cannot be empty</div>
              @enderror
            </div>
            <div class="form-group">
                <textarea id="summernote" name="content"></textarea>
                @error('content')
                  <div class="text-danger">this field cannot be empty</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
              @error('preview_image')
              <div class="text-danger">this field cannot be empty</div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File main input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
              @error('main_image')
              <div class="text-danger">this field cannot be empty</div>
          @enderror
            </div>
            <div class="form-group">
              <label>Select a category</label>
              <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$category->id == old('category_id') ? 'selected':''}}>{{$category->title}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tags</label>
              <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a tags" style="width: 100%;">
                @foreach ($tags as $tag)
                  <option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }} 
                    value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="add">
            </div>
          </form>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection