<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $order = new Orders();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phoneNumber = $request->phoneNumber;
        $order->address = $request->address;
        $order->ZIPcode = $request->ZIPCode;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->paymentMethod = $request->paymentMethod;
        $order->price = $request->totalPrice;
        $order->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
