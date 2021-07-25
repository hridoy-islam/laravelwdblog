@extends('admin.common.layout')
@section('title', 'Add Author')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Author</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action={{route('author.store')}}>
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Author's Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Author Name">
                </div>

                <div class="form-group">
                    <label for="email">Author's Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Author Email">
                </div>

                <div class="form-group">
                    <label for="phone">Author's Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Author phone">
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Auhtor</button>
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
