<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function index(){
        $products = Product::paginate(12);
        return view('shop' , compact('products'));
     }
     public function productDetails($slug){
        $product = Product::where('slug', $slug)->first();
        return view('details',compact('product'));
     }
}
