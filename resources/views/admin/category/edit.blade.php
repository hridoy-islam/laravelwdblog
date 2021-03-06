@extends('admin.common.layout')
@section('title', 'Edit Category')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit <b>{{$data->category_name}}</b></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" id="categoryname" value="{{$data->category_name}}">
                </div>

                <div class="form-group">
                    <label for="cat_slug">Category Slug</label>
                    <input type="text" class="form-control" id="cat_slug" value="{{$data->category_slug}}">
                  </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Category</button>
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
