@extends('admin.common.layout')
@section('title', 'List Category')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Category</th>
                                    <th>Update</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)

                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>  <a class="btn btn-primary btn-xs" href="{{route('category.edit', $row->id)}}">Edit</a>

                                    </td>
<td>
<a
href="{{route('category.destroy', $row->id)}}"
class="btn btn-danger btn-xs">
Delete
</a>
</td>
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

