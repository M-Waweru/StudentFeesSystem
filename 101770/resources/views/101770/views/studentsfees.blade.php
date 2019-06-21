@extends('101770.layouts.layout')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Students Fees</h2>
        </div>
        <div class="col">
            <br>
            <form method="GET" action={{ url('search') }}>
                <div class="input-group">
                    <input type="number" class="form-control" list="studentdetails" name="student_no" placeholder="Search for a student here">
                    <datalist id="studentdetails">
                        @foreach ($feesdetails as $student)
                        <option value="{{ $student->students->id }}" data-value="">{{ $student->students->full_name }}
                        </option>
                        @endforeach
                    </datalist>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Fee no</th>
            <th scope="col">Date of Payment</th>
            <th scope="col">Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($feesdetails as $fee)
        <tr>
            <th scope="row">{{ $fee->students->id }}</th>
            <td>{{ $fee->students->full_name }}</td>
            <td>{{ $fee->id }}</td>
            <td>{{ $fee->dop }}</td>
            <td>{{ $fee->amount }}</td>
        </tr>
        @endforeach
        <tr>
            <th scope="row" colspan="4">Total</th>
            <td><b>{{ $totalfees }}</b></td>
        </tr>
    </tbody>
</table>



@endsection