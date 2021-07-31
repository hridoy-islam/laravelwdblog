@extends('frontend.common.customer')
@section('content')

<div class="media big-left-media">

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <tr>
            <td>{{$data->firstname}}</td>
            <td>{{$data->lastname}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
        </tr>
    </table>


</div>

@endsection
