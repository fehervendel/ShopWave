<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category)
    {
        $products = Products::where('category', $category)->get();
        return view('products.index', [
            'products' => $products,
            'category' => $category
        ]);
    }

    public function productsIndex()
    {

        $uniqueProducts = Products::select('name', DB::raw('MIN(id) as id'))->groupBy('name')->get();

        $productsIds = $uniqueProducts->pluck('id');
        
        $products = Products::whereIn('id', $productsIds)->paginate(4);
    
        return view('products', compact('products'));
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
    public function show(string $id)
    {
        $product = Products::find($id);
        return view('products.show', compact('product'));
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
