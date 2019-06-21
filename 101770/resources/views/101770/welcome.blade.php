@extends('101770.layouts.layout')

@section('title', 'Manage Student')

@section('content')
<br>
<br>
<div class="jumbotron">
    <h1 class="display-4">Welcome to StudentManage</h1>
    <p class="lead">This is a student and fees management system</p>
    <hr class="my-4">
    <p>These are the options available</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ url('students') }}" role="button">Add a Student</a>
        <a class="btn btn-primary btn-lg" href="{{ url('fees') }}" role="button">Add Fee statement</a>
        <a class="btn btn-primary btn-lg" href="{{ url('studentsdetails') }}" role="button">Show Fee statements</a>
    </p>
</div>
@endsection