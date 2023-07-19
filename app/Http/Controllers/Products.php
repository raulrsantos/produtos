<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Products extends Controller
{
    public function home(){
        $produtos = Product::all();
        return view('produtos/home', compact('produtos'));
    }

    public function detail($product){
        $produto = Product::find($product);
        return view('produtos/detail', compact('produto'));
    }
}
