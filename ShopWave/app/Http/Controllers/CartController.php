<?php

namespace App\Http\Controllers;

use App\Carts\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    public function index()
    {
        $cartContent = Cookie::get('cart');

        if($cartContent) {

            $productIds = json_decode($cartContent, true);

            $content = Products::whereIn('id', $productIds)->get();

            if($content->isEmpty()) {
                $content = 'Your cart is empty.';
            }


        } else {
            $content = 'Your cart is empty.';
        }

        return view('cart', compact('content'));
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
    public function store(string $id) : \Illuminate\Http\JsonResponse
    {
        $this->cart->addProduct($id);

        return response()->json([
           'response' => true
        ]);
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
        $this->cart->removeProduct($id);

        return response()->json([
            'response' => true
        ]);
    }
}
