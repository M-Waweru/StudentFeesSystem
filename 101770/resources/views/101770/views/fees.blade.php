@extends('101770.layouts.layout')

@section('content')
<div class="container">
    <h2>Fees form</h2>
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
    <form name="feesform" method="POST" action={{ route('fees.store') }}>
        {{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="student_no">Student Name</label>
            <input type="text" name="student_no" class="form-control" id="student_no" placeholder="Student No">
        </div> --}}
        <div class="form-group">
            <label for="student_no">Student Details</label>
            <input type="text" name="student_no" id="student_no" class="form-control" list="studentdetails"
                placeholder="Student Name" value="{{ old('student_no') }}">
            <datalist id="studentdetails">
                @foreach ($studentdetails as $student)
                <option value="{{ $student->id }}" data-value="">{{ $student->full_name }}
                </option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label for="dop">Date of Payment</label>
            <input type="date" name="dop" class="form-control" id="dop" placeholder="Date of Payment" value="{{ old('dop') }}">
        </div>
        <div class="form-group">
            <label for="feesamount">Amount paid</label>
            <input type="number" name="feesamount" class="form-control" id="feesamount"
                placeholder="Enter the amount paid in Kshs" value="{{ old('feesamount') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection