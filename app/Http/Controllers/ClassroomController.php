<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.classroom.create');
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
         
        $classroom = new Classroom;
        $classroom->classroom_code = $request->input('classroom_code');
        $classroom->classroom_name = $request->input('classroom_name');
        $classroom->classroom_teacher_id = $request->input('classroom_teacher_id');
        $classroom->description = $request->input('description');
        $classroom->save();
        return redirect()->route('classroom.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $classroom =  Classroom::find($id);
        $classroom->classroom_code = $request->input('classroom_code');
        $classroom->classroom_name = $request->input('classroom_name');
        $classroom->classroom_teacher_id = $request->input('classroom_teacher_id');
        $classroom->description = $request->input('description');
        $classroom->save();
        return redirect()->route('classroom.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom = Classroom::find($id);
        $classroom->delete();
    }
}
