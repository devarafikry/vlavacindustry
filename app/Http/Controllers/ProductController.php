<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product(Request $request){
    
    	

    	$img = DB::table('product_image')->
    	where('id_product','=',$request->id)->
    	select('*')->get();
		$img2 = DB::table('product_image')->
    	where('id_product','=',$request->id)->
    	select('*')->get();
    	$detail=DB::table('product')->
    	where('id','=',$request->id)->select('*')->get();
      	return view('productdetails',['detail'=>$detail,'img'=>$img,'img2'=>$img2]);

    }

    public function addtocart(Request $request){
      return view('addtocart');
    }
}