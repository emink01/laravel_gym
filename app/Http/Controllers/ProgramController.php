<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Program;
use App\Models\Member;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // programi u trajanju od 30 minuta
        $programsWithDuration30 = Program::where('duration', 30)->get();
        
        // Članovi sa mjesečnom pretplatom
        $membersWithMonthlySubscription = Member::where('membership_type', 'mjesecna')->get();
    
        return view('programs.index', compact('programsWithDuration30', 'membersWithMonthlySubscription'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
