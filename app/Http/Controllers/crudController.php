<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(2);
        return view('pagesCrud.index' , compact('product')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagesCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
           'name' => 'required | string | max:255 ' ,
           'email' => 'required | email | max:255 ' ,
           'password' => 'nullable | min:8 ',
        ]);
         
        Product::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => $request->password ,
        ]) ;

        return to_route('crudPage.index') ;
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id) ;
        return view('pagesCrud.show' , compact('product')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id) ;
        return view('pagesCrud.edit' , compact('product')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id) ;
          $request->validate([
            'name' => 'required | string | max:255 ' ,
            'email' => 'required | email | max:255 ' ,
            'password' => 'nullable | min:8 ',
         ]);
        $data = $request->only(['name' , 'email' , 'password']) ;
        $product->update($data);
        
        return to_route('crudPage.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id) ;
        $product->delete() ;
        
        return to_route('crudPage.index') ;
    }
}
