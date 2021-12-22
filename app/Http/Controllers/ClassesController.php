<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return LHUClass::all()->toArray();
        //return "查詢所有班級資料";
        $Classes=LHUClass::all()->sortBy('classroom');
        return view('Classes.index')->with(['Classes'=>$Classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "新增班級資料表單";
        return view('Classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "新增班級資料";
        $department = $request->input('department');
        $classname = $request->input('classname');
        $grade = $request->input('grade');
        $classroom = $request->input('classroom');
        $teacher = $request->input('teacher');

        LHUClass::create([
        'department' => $department,
        'classname' => $classname,
        'grade' => $grade,
        'classroom' => $classroom,
        'teacher' => $teacher
        ]);
        return redirect('classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "顯示單筆班級資料";
        $Class=LHUClass::findOrFail($id);
        return view('Classes.show')->with(['Class'=>$Class]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "修改班級資料表單";
        $Class=LHUClass::findOrFail($id);
        return view('Classes.edit')->with(['Class'=>$Class]);
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
        //return "修改班級資料";
        $class = LHUClass::findOrFail($id);

        $class->department = $request->input('department');
        $class->classname = $request->input('classname');
        $class->grade = $request->input('grade');
        $class->classroom = $request->input('classroom');
        $class->teacher = $request->input('teacher');
        $class->save();
        return redirect('classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "刪除班級資料";
        $class = LHUClass::findOrFail($id);
        $class ->delete();
        return redirect('classes');
    }
}
