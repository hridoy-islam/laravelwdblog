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
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Author's Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Author Name">
                </div>

                <div class="form-group">
                    <label for="email">Author's Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Author Email">
                </div>

                <div class="form-group">
                    <label for="phone">Author's Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Author phone">
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Auhtor</button>
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
