<?php

namespace App\Http\Controllers;

use App\Fees;
use App\Student;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentdetails = Student::select('id','full_name')->get();
        return view('101770.views.fees', compact('studentdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_no' => 'required',
            'dop' => 'required',
            'feesamount' => 'required',
            // $this->messages(),
        ]);

        $student_no = $request->input('student_no');
        $dop = $request->input('dop');
        $feesamount = $request->input('feesamount');

        echo $student_no;

        $newfees = new Fees;

        $newfees->student_no = $student_no;
        $newfees->dop = $dop;
        $newfees->amount = $feesamount;

        if ($newfees->save()){
            $request->session()->flash('success', 'Save successful');
            echo "Save successful";
        } else {
            $request->flash('failure', 'Ooh, something went wrong');
            echo "Ooh, something went wrong";
        }

        return redirect('/fees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fees $fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees)
    {
        //
    }
}
