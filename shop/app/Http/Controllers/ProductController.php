<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $categories=Categories::all();
        $title='Products';
        $products=Product::all();
        return view('product', compact('products','categories'))->with('title', $title);
    }
    public function edit($id){
        $title='Edit product';
        $products=Product::find($id);
        return view('edit', compact('products'))->with('title', $title);
    }
}