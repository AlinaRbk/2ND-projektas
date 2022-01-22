<?php

namespace App\Http\Controllers;

use App\Models\School;

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
        $shools = Shool::all();
        return view('shools.index', ['shools' => $shools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = Shool::all();
        return view('shools.create', ['select_values' => $select_values]);
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shool = new Shool;

        $shool->name = $request->shool_name;
        $shool->description = $request->shool_description;
        $shool->place = $request->shool_place;
        $shool->shool_id = $request->shool_id;

        $shool->save();

        return redirect()->route('shools.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('shools.show', ['shool'=> $shool]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('shools.edit',['shool' => $shool]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolRequest  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $shool->name = $request->shool_name;
        $shool->description = $request->shool_description;
        $shool->place = $request->shool_place;
        $shool->shool_id = $request->shool_id;
        
        $shool->save();
        return redirect()->route('shool.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $shool->delete();
        return redirect()->route('shool.index');
    }
}
