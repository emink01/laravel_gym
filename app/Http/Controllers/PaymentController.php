<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = DB::table('payments')
            ->get();

        return view('payments.index', ['payments' => $payments]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = DB::table('members')
            ->get();

        return view('payments.add', ['members' => $members]);
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

        DB::table('payments')->insert([
            'member_id' => $request->member_id,
            'membership_type' => $request->membership_type,
            'price' => $request->price,
            'payment_date' => $request->payment_date,

        ]);
    
        //
    }

    public function members ()
    {
        return $this->belongsTo(Member::class, 'name');

    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
