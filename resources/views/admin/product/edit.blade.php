@extends('admin.common.layout')
@section('title', 'Edit Product')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" value="{{$data['name']}}">
                            </div>


                            <div class="form-group">
                                <label for="name">Product Short Description</label>

                                <textarea name="" class="form-control" cols="30" rows="10">
                                {{ $data->short_description}}
                    </textarea>
                            </div>

                            <div class="form-group">
                                <label for="name">Product Long Description</label>

                                <textarea name="" class="form-control" cols="30" rows="10">
                                    {{ $data->long_description}}

                    </textarea>
                            </div>


                            <div class="form-group">
                                <label for="name">Category</label>

                                <select name="" id="" class="form-control">

                                    @foreach($category as $cat)

                                    <option {{ $data->category->category_name == $cat->category_name ? 'selected' : ''}} value="{{$cat->category_name}}">
                                        {{$cat->category_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="name">Product Thumbnail</label> <br>

                                <input type="file" name="thumbnail" id="" class="form-control">
                            </div>

    <div class="form-group">
        <label for="name">Brands</label> <br>
        <select name="" id="" class="form-control">

            @foreach($brands as $brand)

    <option {{ $data->brand->name == $brand->name ? 'selected' : ''}} value="{{$brand->name}}">
        {{$brand->name}}
    </option>
            @endforeach
        </select>
    </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Product</button>
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
