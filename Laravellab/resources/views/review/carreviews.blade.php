@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>All Cars</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Review ID</th>
                <th scope="col">Car ID</th>
                <th scope="col">Review</th>
                <th scope="col">View car</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td scope="row">{{$car->id}}</td>
                <td>{{$car->car_id}}</td>
                <td>{{$car->content}}</td>
                <td><a href="{{ url('/review/car/'.$car->car_id) }}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection