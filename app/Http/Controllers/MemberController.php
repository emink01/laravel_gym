<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = DB::table('members')
            ->get();
        
        return view('members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('members.add');
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

        DB::table('members')->insert([
            'name' => $request->name,
            'membership_type' => $request->membership_type,
            'phone' => $request->phone,
            'email' => $request->email,
            'join_date' => $request->join_date,
        ]);

        return redirect()->route('members');
    }


    public function file_add(Request $request)
    {
        $id=$request->id;
        
        $members = Member::find($id);

        return view('members.file_add', ['id' => $id , 'members' => $members]);

    }


    public function process(Request $request)
    {
        $id=$request->id;
        
        $members = Member::find($id);

        $folder_to_save = $members->code;

        $file = $request->file('file');

        $filename = $members->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('members');
    }

    public function delete(Request $request)
    {
        $id=$request->id;

        Member::destroy($id);

        return redirect()->route('members');

    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $members = DB::table('members')
        ->where('id', $id)
        ->get();

    
        return view('members.edit', ['members' => $members]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'name'=>'required|string|max:255',
            'membership_type'=>'required|string',        
        ]);

        $update_query = DB::table('members')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'membership_type' => $request->membership_type,
            'phone' => $request->phone,
            'email' => $request->email,
            'join_date' => $request->join_date,
            ]);

        return redirect()->route('members');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
