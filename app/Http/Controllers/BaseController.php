<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

class BaseController extends Controller
{
    public function getIndex (){
    	$categories = Category::all();
$products = Product::limit(6)->get();
	return view('index', compact('categories', 'products'));
	}
}
