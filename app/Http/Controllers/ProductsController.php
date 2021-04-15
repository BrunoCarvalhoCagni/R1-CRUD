<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = product::orderby('id', 'desc')->paginate(10);
        return view('products.index',  ['products' => $products]);

    }

    public function create(){
        return view('products.create');
    }

    public function insert(Request $request){
        $product = new Product(); 
        $product->name = $request->name; 
        $product->price = $request->price; 
        $product->stock = $request->stock; 
        $product->description = $request->description; 
        $product->save();
        return redirect()->route('products');
    }

    public function show($id){

        $product= product::find($id);

        return view('products.show', ['products' => $product]);
    }

    public function edit(product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function editRequest(Request $request, product $product){ 
        $product->name = $request->name; 
        $product->price = $request->price; 
        $product->stock = $request->stock; 
        $product->description = $request->description; 
        $product->save();
        return redirect()->route('products');
    }

    public function delete(product $product){

        $product->delete(); 
        return redirect()->route('products');
        
    }
    public function modal($id){

        $products = product::orderby('id', 'desc')->paginate();
        return view('products.index', ['products' => $products, 'id' => $id]);

    }

    
    }

