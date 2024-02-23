<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::table('employees')
            ->get();
        
        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.add');
        //
    }

    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('employees')->insert([
            'name' => $request->name,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
            'hire_date' => $request->hire_date,
        ]);

        return redirect()->route('employees');
    }

    public function delete(Request $request)
    {
        $id=$request->id;

        Employee::destroy($id);

        return redirect()->route('employees');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $employees = DB::table('employees')
        ->where('id', $id)
        ->get();

    
        return view('employees.edit', ['employees' => $employees]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'name'=>'required|string|max:255',
            'position'=>'required|string',
            
        ]);

        $update_query = DB::table('employees')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
            'hire_date' => $request->hire_date,
            ]);

        return redirect()->route('employees');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
