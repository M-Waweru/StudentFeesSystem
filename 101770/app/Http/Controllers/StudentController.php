<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("101770.views.student");
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
            'full_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            // $this->messages(),
        ]);

        $full_name = $request->input('full_name');
        $dob = $request->input('dob');
        $address = $request->input('address');

        $newstudent = new Student;

        $newstudent->full_name = $full_name;
        $newstudent->dob = $dob;
        $newstudent->address = $address;

        if($newstudent->save()){
            $request->session()->flash('success', 'Save successful');
            echo "Save successful";
        } else {
            $request->flash('failure', 'Ooh, something went wrong');
            echo "Ooh, something went wrong";
        }

        return redirect('/students');
    }

    public function messages()
    {
        return [
            'dob.required' => 'A Date of Birth is required',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */

    public function showAll(){
        $studentsdetails = 
    }


    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
