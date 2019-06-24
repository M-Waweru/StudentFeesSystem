@extends('layouts.layout')

@section('content')
@foreach ($car as $car)
<div class="container">
    <h1>Car {{$car->id}}</h1>
    <ul>
        <li>Make: {{$car->make}}</li>
        <li>Model: {{$car->model}}</li>
        <li>Produced on: {{$car->produced_on}}</li>
    </ul>
</div>
@endforeach
@endsection