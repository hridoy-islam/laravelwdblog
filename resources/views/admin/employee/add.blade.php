@extends('admin.common.layout')
@section('title', 'Add Employee')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Employee</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('employee.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="employeename">Employee Name</label>
                                <input type="text" class="form-control" id="employeename" name="name"
                                    placeholder="Employee Name" value={{old('name')}}>
                            </div>

                            <div class="form-group">
                                <label for="email">Employee Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Employee Email" value={{old('email')}}>
                            </div>
                            <div class="form-group">
                                <label for="phone">Employee Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Employee phone" value={{old('phone')}}>
                            </div>


                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" id="department" name="department"
                                    placeholder="Department" value={{old('department')}}>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Employee</button>
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
