<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    public function room(Request $request){
      if($request->room_name == 'livingroom'){
          $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',3)
            ->select('*')
            ->get();
        // $category = DB::table('product_category')->get();
        $room_name = "Living Room";
      } else if($request->room_name == 'bedroom'){
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',4)
            ->select('*')
            ->get();
        $room_name = "Bed Room";
      } else if($request->room_name == 'diningroom'){
        $room_name = "Business Space";
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',5)
            ->select('*')
            ->get();
        $room_name = "Dining Room";
      } else if($request->room_name == 'businessspace'){
        $room_name = "Business Space";
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',6)
            ->select('*')
            ->get();
      } else if($request->room_name == 'kitchen'){
        $room_name = "Business Space";
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',7)
            ->select('*')
            ->get();
        $room_name = "Kitchen";
      }
      else if($request->room_name == 'new'){
        $room_name = "Business Space";
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',1)
            ->select('*')
            ->get();
        $room_name = "New";
      } else if($request->room_name == 'bestseller'){
        $room_name = "Business Space";
         $category = DB::table('product_category')
            ->join('room_category', 'product_category.id', '=', 'room_category.id_category')
            ->join('room', 'room.id', '=', 'room_category.id_room')->where('room.id','=',2)
            ->select('*')
            ->get();
        $room_name = "Best Seller";
      }
        return view('roomlist',['room_name'=>$room_name,'category'=>$category]);
    }

    public function category(Request $request){
      if($request->room_name == 'livingroom'){
         $product = DB::table('product')
            ->join('room_product', 'product.id', '=', 'room_product.id_product')
            ->join('room', 'room.id', '=', 'room_product.id_room')->where('room.id','=',3)
            ->select('*')
            ->get();
        $room_name = "Living Room";
      } else if($request->room_name == 'bedroom'){
        $room_name = "Bed Room";
      } else if($request->room_name == 'diningroom'){
        $room_name = "Dining Room";
      } else if($request->room_name == 'businesspace'){
          $product = DB::table('product')
            ->join('room_product', 'product.id', '=', 'room_product.id_product')
            ->join('room', 'room.id', '=', 'room_product.id_room')->where('room.id','=',6)
            ->select('*')
            ->get();
        $room_name = "Business Space";
      } else if($request->room_name == 'kitchen'){
        $room_name = "Kitchen";
      }
      else if($request->room_name == 'new'){
        $room_name = "New";
      } else if($request->room_name == 'bestseller'){
        $room_name = "Best Seller";
      }
        return view('sofa',['category'=> $request->category,'room_name'=>$room_name,'product'=>$product]);
    }
}
