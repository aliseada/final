<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FrontController extends Controller
{
    public function index(){
        $products=Product::all();
    	return view('front.home',compact('products'));
    }
    public function product(){

      $products=Product::all();  
      return view('front.product',compact('products'));
    }
    public function product_detail(){

    	return view('front.product_detail');
    }
}
