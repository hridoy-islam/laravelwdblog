@extends('admin.common.layout')
@section('title', 'Add Brand')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Brand</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('brand.store')}}">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Brand's Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Author Name">
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Brand</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->

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
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
