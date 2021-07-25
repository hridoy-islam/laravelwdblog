@extends('admin.common.layout')
@section('title', 'Author List')


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Author List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Auhtor Name</th>
                    <th>Auhtor Email</th>
                    <th>Auhtor Phone</th>
                    <th>Update</th>
                    <th style="width: 40px">Delete</th>
                  </tr>
                </thead>
                <tbody>
            @foreach ($data as $row)
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->email}}</td>
                    <td>{{ $row->phone}}</td>
                    <td>
                    <a href="{{ route('author.edit', $row->id)}}"class="btn btn-primary btn-xs" href="">Edit</a>

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
