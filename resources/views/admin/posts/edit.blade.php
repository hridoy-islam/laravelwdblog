@extends('admin.common.layout')
@section('title', 'Edit posts')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit This Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Post Title</label>
                  <input type="text" class="form-control" id="name" value="{{ $data->title }}">
                </div>

                <div class="form-group">
                    <label for="name">Post Slug</label>
                    <input type="text" class="form-control" id="name" value="{{ $data->slug }}">
                </div>


                <div class="form-group">
                    <label for="name">Post Title</label>

                    <textarea name="" class="form-control" cols="30" rows="10">
                        {{ $data->description }}
                    </textarea>
                </div>


                <div class="form-group">
                    <label for="name">Category</label>

                   <select name="" id="" class="form-control">

                @foreach($category as $cat)

                <option {{ ($data->category->category_name) == $cat->category_name ? 'selected' : '' }} value="{{$cat->category_name}}">
                           {{$cat->category_name}}
                        </option>
                @endforeach
                   </select>
                </div>

                <div class="form-group">
                    <label for="name">Author</label>

                   <select name="" id="" class="form-control">

                @foreach($user as $author)

                <option {{($data->user->name) == $author->name ? 'selected' : ''}} value="{{$author->name}}">
                           {{$author->name}}
                        </option>
                @endforeach
                   </select>
                </div>

                <div class="form-group">
                    <label for="name">Thumbnail</label> <br>
                <img src="{{$data->thumbnail}}" width="200" alt="">
                <input type="file" name="thumbnail" id="" class="form-control">
                </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Post</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

