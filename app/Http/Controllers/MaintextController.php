<?php

namespace App\Http\Controllers;
use App\Maintext;
class MaintextController extends Controller
{
    public function getIndex($url = null){
    	$obj = Maintext::where('url', $url)->first();
    	// print version
    	if(isset($_GET['print'])){
    		$print = 'print';
    	}else {
    		$print = 'base';
    	}
    	return view( 'static', compact('url', 'obj', 'print'));
    }
}
