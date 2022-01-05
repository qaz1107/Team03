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
        $Students=Student::all()->sortBy('student_id');
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
        $Students=Student::all()->sortBy('id');
        return view('Students.create')->with(['Students'=>$Students]);
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
        $country=Student::allcountries()->get();
        return view('Students.edit')->with(['Student'=>$Student,'country'=>$country]);
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
    public function api_Students()
    {
        return Student::all();
    }
    public function api_updpte(Request $request)
    {
        $Students = Student::find($request->input('id'));
        if ($Students == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $Students->student_id = $request->input('student_id');
        $Students->seat_number = $request->input('seat_number');
        $Students->name = $request->input('name');
        $Students->gender = $request->input('gender');
        $Students->cid = $request->input('cid');
        $Students->graduation_year = $request->input('graduation_year');
        $Students->start_year = $request->input('start_year');
        $Students->seat = $request->input('seat');
        $Students->country = $request->input('country');

        if ($Students->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function api_delete(Request $request)
    {
        $Students = Student::find($request->input('id'));

        if ($Students == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($Students->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
