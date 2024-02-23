<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Program;
use App\Models\Member;
use App\Models\Employee;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index()
{
    // Programs with a duration of 30 minutes
    $programsWithDuration30 = Program::where('duration', 30)->get();
    
    // Members with a monthly subscription
    $membersWithMonthlySubscription = Member::where('membership_type', 'mjesecna')->get();

    // Employees who are system administrators
    $systemAdministrators = Employee::where('position', 'System Administrator')->get();

    // Members who joined in 2023
    $membersJoinedIn2023 = Member::whereYear('join_date', 2023)->get();

    // Most expensive program
    $mostExpensiveProgram = Program::orderBy('price', 'desc')->first();

    return view('programs.index', compact('programsWithDuration30', 'membersWithMonthlySubscription', 'systemAdministrators', 'membersJoinedIn2023', 'mostExpensiveProgram'));
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
