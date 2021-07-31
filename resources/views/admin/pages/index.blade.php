@extends('admin.common.layout')
@section('title', 'Dashboard')
@section('content')

<h1>Hello*</h1>
<h2>Import Users Here</h2>
<form action="{{route('import.users')}}" method="post" enctype="multipart/form">
    @csrf
    <input type="file" name="file" accept=".xlsx"  class="form-control">
    <button class="btn btn-primary">Import User</button>
</form>

@endsection
