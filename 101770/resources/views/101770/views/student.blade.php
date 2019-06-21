@extends('101770.layouts.layout')

@section('title', 'Student form')

@section('content')
<div class="container">
    <h2>Student form</h2>

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
    <form name="studentform" method="POST" action={{ route('students.store') }}>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="full_name">Full name</label>
            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name"
                value="{{ old('full_name') }}">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" class="form-control" id="dob" placeholder="Date of Birth"
                value="{{ old('dob') }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address"
                value="{{ old('address') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection