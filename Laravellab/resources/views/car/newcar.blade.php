@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Add a Car</h1>
    @if (Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    @if (Session::has('failure'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('failure') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ url('/car') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="carmake">Make</label>
            <input name="carmake" type="text" class="form-control" id="carmake" placeholder="Enter Make">
        </div>
        <div class="form-group">
            <label for="carmodel">Make</label>
            <input name="carmodel" type="text" class="form-control" id="carmodel" placeholder="Enter Car Model">
        </div>
        <div class="form-group">
            <label for="producedon">Produced on</label>
            <input name="producedon" type="date" class="form-control" id="producedon" placeholder="Enter Produced On">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection