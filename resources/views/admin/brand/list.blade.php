@extends('admin.common.layout')
@section('title', 'Brnads List')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Brands List</h3>
              <br>
              <a href="{{route('export.brands')}}" class="btn btn-primary" >Export Brand List</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Brand Name</th>
                    <th>Update</th>
                    <th style="width: 40px">Delete</th>
                  </tr>
                </thead>
                <tbody>
            @foreach ($data as $row)
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name}}</td>
                    <td>
                    <a href="{{ route('brand.edit', $row->id)}}"class="btn btn-primary btn-xs" href="">Edit</a>

                    </td>
                    <td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
                  </tr>
            @endforeach
                </tbody>
              </table>
            </div>

          </div>

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
