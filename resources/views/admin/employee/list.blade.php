@extends('admin.common.layout')
@section('title', 'List Employee')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee List</h3>

                        <br>
                        <a href="{{route('export.employee')}}" class="btn btn-info"> Export List </a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Sallery</th>
                                    <th>Department</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)

                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->sallery }}</td>
                                    <td>{{ $row->department }}</td>
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

