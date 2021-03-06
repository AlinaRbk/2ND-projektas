<?php

namespace App\Http\Controllers;
use App\Models\School;
use App\Models\Student;
use App\Models\AttendanceGroup;
use App\Http\Requests\StoreAttendanceGroupRequest;
use App\Http\Requests\UpdateAttendanceGroupRequest;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AttendanceGroups = AttendanceGroup::all();
        return view('attendanceGroups.index', ['attendanceGroups' => $attendanceGroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = AttendanceGroup::all();
        return view('attendanceGroup.create', ['select_values' => $select_values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendanceGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)\
    {
        $attendancegroup= new AttendanceGroup;

        $attendanceGroup->name = $request->attendanceGroup_name;
        $attendanceGroup->description = $request->attendanceGroup_description;
        $attendanceGroup->difficulty = $request->attendanceGroup_difficulty;
        $attendanceGroup->school_id = $request->attendanceGroup_school_id;

        $attendanceGroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendanceGroup)
    {
        return view('attendanceGroups.show', ['attendanceGroup'=> $attendanceGroup]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendanceGroup)
    {
        $select_values = AttendanceGroup::all();
        return view('attendanceGroups.edit', ['attendanceGroup' => $attendancegroups, 'select_values' => $select_values]);    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendanceGroupRequest  $request
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendanceGroup)
    {
        $attendancegroup->name = $request->attendancegroup_name;
        $attendancegroup->description = $request->attendancegroup_description;
        $attendancegroup->difficulty = $request->attendancegroup_difficulty;
        $attendancegroup->school_id = $request->attendancegroup_school_id;

        $attendancegroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendanceGroup)
    {
        $attendancegroup->delete();
        return redirect()->route('attendancegroup.index');
    }
}
