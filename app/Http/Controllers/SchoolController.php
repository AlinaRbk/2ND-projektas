<?php

namespace App\Http\Controllers;

use App\Models\school;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Http\Request;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('schools.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = School::all();
        return view('schools.create', ['select_values' => $select_values]);
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new School;

        $school->name = $request->school_name;
        $school->description = $request->school_description;
        $school->place = $request->school_place;
        $school->school_id = $request->school_id;

        $school->save();

        return redirect()->route('school.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('schools.show', ['school'=> $school]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $select_values = School::all();
        return view('schools.edit', ['school' => $school, 'select_values' => $select_values]);    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolRequest  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->name = $request->school_name;
        $school->description = $request->school_description;
        $school->place = $request->school_place;
        $school->school_id = $request->school_id;
        
        $school->save();
        return redirect()->route('school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('school.index');
    }
}
