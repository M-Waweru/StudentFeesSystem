@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Add Car Review</h1>
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
    <form action="{{ url('/review') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="carid">Car ID</label>
            <input name="carid" type="number" class="form-control" id="carid" placeholder="Enter Make">
        </div>
        <div class="form-group">
            <label for="carreview">Review</label>
            <textarea name="carreview" type="text" class="form-control" id="carreview"
                placeholder="Enter Car Review"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection