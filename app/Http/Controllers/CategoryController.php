<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function getIndex($id = null){
    	$obj = Category::find($id);
    	$categories = Category::all();
    	$products = Product::where('category_id', $id)->paginate(30);
    	return view('category', compact('obj', 'products','categories'));
    }
}
