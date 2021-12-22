<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Student::all()->toArray();
        //return "查詢所有學生資料";
        $Students=Student::all();
        return view('Students.index')->with(['Students'=>$Students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "新增學生資料表單";
        return view('Students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "新增學生資料";
        $student_id = $request->input('student_id');
        $seat_number = $request->input('seat_number');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $cid = $request->input('cid');
        $graduation_year = $request->input('graduation_year');
        $start_year = $request->input('start_year');
        $seat = $request->input('seat');
        $country = $request->input('country');

        Student::create([
            'student_id' => $student_id ,
            'seat_number' => $seat_number ,
            'name' => $name ,
            'gender' => $gender ,
            'cid' => $cid ,
            'graduation_year' => $graduation_year ,
            'start_year' => $start_year ,
            'seat' => $seat ,
            'country' => $country ,
        ]);
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Student=Student::findOrFail($id);
        return view('Students.show')->with(['Student'=>$Student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "修改學生資料表單";
        $Student=Student::findOrFail($id);
        return view('Students.edit')->with(['Student'=>$Student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return "修改學生資料";
        $Student = Student::findOrFail($id);

        $Student->student_id = $request->input('student_id');
        $Student->seat_number = $request->input('seat_number');
        $Student->name = $request->input('name');
        $Student->gender = $request->input('gender');
        $Student->cid = $request->input('cid');
        $Student->graduation_year = $request->input('graduation_year');
        $Student->start_year = $request->input('start_year');
        $Student->seat = $request->input('seat');
        $Student->country = $request->input('country');
        $Student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "刪除學生資料";
        $Student = Student::findOrFail($id);
        $Student -> delete();
        return redirect('students');
    }
}
