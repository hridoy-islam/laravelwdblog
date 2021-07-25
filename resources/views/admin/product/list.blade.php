@extends('admin.common.layout')
@section('title', 'Product List')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">product List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Thumbnail</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Update</th>
                    <th style="width: 40px">Delete</th>
                  </tr>
                </thead>
                <tbody>
            @foreach ($data as $row )
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>  <img width="50" height="50" src="{{ $row->thumbnail }}" alt="">
                    </td>
                    <td>{{$row->category->category_name}}</td>
                    <td>{{$row->brand->name}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('product.edit', $row->id )}}">Edit</a>
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
        {{ $data->links() }}
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
