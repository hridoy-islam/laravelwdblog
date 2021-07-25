@extends('admin.common.layout')
@section('title', 'Add Category')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('category.store')}}">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="categoryname">Category Name</label>
                  <input type="text" class="form-control" id="categoryname" name="category_name" placeholder="Category Name" value={{old('category_name')}}>
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Category</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
