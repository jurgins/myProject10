<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Maintext;


class SearchController extends Controller
{
    public function getIndex(){
    	$search = $_GET['search'];
    	$obj_prod = Product::where('nameProduct', 'LIKE', '%'.$search.'%')
    						->orWhere('description', 'LIKE', '%'.$search.'%')
    						->get();
    	$obj_cat = Category::where('name', 'LIKE', '%'.$search.'%')
    						->get();
    	$obj_maintext = Maintext::where('name', 'LIKE', '%'.$search.'%')
    							->orWhere('body', 'LIKE', '%'.$search.'%')
    							->get();
    	return view('search', compact('obj_prod', 'obj_cat', 'obj_maintext'));
    }
}
