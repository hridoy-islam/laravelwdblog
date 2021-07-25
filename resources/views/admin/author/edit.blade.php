@extends('admin.common.layout')
@section('title', 'Edit Author')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><b>{{$data->name}}</b> </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>


              <div class="card-body">
                <div class="form-group">
                  <label for="name">Author's Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Author's Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                </div>

                <div class="form-group">
                    <label for="phone">Author's Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
                </div>

                <div class="form-group">
                    <label for="phone">Facebook Id</label>
                    <input type="text" class="form-control" id="phone" name="facebook" value="{{$data->facebook}}">
                </div>

                <div class="form-group">
                    <label for="github">Github Id</label>
                    <input type="text" class="form-control" id="github" name="github" value="{{$data->github}}">
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label> <br>
                    <img src="{{$data->thumbnail}}" width='100' height='100' alt="">
                    <input type="file" class="form-control" id="photo" value="{{$data->thumbnail}}">
                </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Profile</button>
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
