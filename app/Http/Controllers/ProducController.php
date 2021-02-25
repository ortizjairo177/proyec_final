<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Storage;
use Illuminate\Support\facades\File;


class ProducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /*falta campos para validar */
    public function store(Request $request)
    {
        $request->validate([
           'name' => ['required', 'string', 'max:25' ],
           'description' => ['required', 'string' ],
           'value' => ['required', 'integer' ],
           'quantity' => ['required', 'integer' ],           
           'seller' => ['required', 'string' ],
           'category' => ['required', 'string' ]
            
        ]);

         $image = '';
        if ($request->file('productcover') !=null){
           $image = $this->get_and_save_image($request->file('productcover'));
                    
        }

         Product::create([
             'name' => $request ->get('name'),
             'description' => $request ->get('description'),
             'value' => $request ->get('value'),             
             'quantity' => $request ->get('quantity'),             
             'status' => $request ->get('status'),
             'seller' => $request ->get('seller'),
             'category' => $request ->get('category'),
             'image' => $image,

         ]);

         return redirect('/product');

    }

    public function get_and_save_image($productcover){
                   
             $extension = $productcover->getClientOriginalExtension();
             Storage::disk('public')->put($productcover->getFilename() . '.' . $extension ,
             File::get($productcover)); 
             return $productcover->image = $productcover->getfilename().'.'. $extension;



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Products.edit', [
            'product' => $product

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:25' ],
            'description' => ['required', 'string' ],
            'value' => ['required', 'integer' ],
            'quantity' => ['required', 'integer' ],            
            'seller' => ['required', 'string' ],
            'category' => ['required', 'string' ]             
            
         ]);

            if ($request->file('productcover') !=null){
               $product->image = $this->get_and_save_image($request->file('productcover'));
                        
            }
             
             
              $product->name = $request ->get('name');
              $product->description = $request ->get('description');
              $product->value = $request ->get('value');             
              $product->quantity = $request ->get('quantity');             
              $product->status = $request ->get('status');
              $product->seller = $request ->get('seller');
              $product->category = $request ->get('category');
              $product->save();
              return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       
      //*  Product::destroy($product->id);
        $product->delete();
        return redirect()->route('product.index'); 
       // return back()->with('success', 'Usuario eliminado con éxito.');

    }

    public function misproduct()
    {
        return view('Products.misprod');
    }

    public function listado()
    {
        return view('Products.listado', [
            'products' => Product::all()
        ]);

    }
}
