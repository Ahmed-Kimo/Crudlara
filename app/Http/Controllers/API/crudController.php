<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all() ;
         return response()->json([
            'success' => true , 
            'message' => 'Retrieved Successfully' , 
            'data' => $products] , 200);
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->validated()) ;
        return response()->json([
            'success' => 'true' ,
            'message' => 'Created Successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id) ;
         return response()->json([
            'success' => true , 
            'message' => 'Retrieved Successfully' , 
            'data' => $product]);
            // Model Binding == element->id
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request,string $id)
    {
        $product = Product::findOrFail($id) ;
        $product->update($request->validated()) ;
        return response()->json([
            'success' => true ,
            'message' => 'Updated Successfully ' ,
            'data' => $product ,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id) ;
        $product->delete();
        return response()->json([
            'success' => true , 
            'message' => 'Deleted Successfully' , ]);
    }
}