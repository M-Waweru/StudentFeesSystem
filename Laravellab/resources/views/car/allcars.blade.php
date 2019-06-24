@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>All Cars</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Car ID</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Produced_on</th>
                <th scope="col">View car</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td scope="row">{{$car->id}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->produced_on}}</td>
                <td><a href="{{ url('/car/'.$car->id) }}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection