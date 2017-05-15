<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room(Request $request){
      if($request->room_name == 'livingroom'){
        $room_name = "Living Room";
      } else if($request->room_name == 'bedroom'){
        $room_name = "Bed Room";
      } else if($request->room_name == 'diningroom'){
        $room_name = "Dining Room";
      } else if($request->room_name == 'businessspace'){
        $room_name = "Business Space";
      } else if($request->room_name == 'kitchen'){
        $room_name = "Kitchen";
      }
      else if($request->room_name == 'new'){
        $room_name = "New";
      } else if($request->room_name == 'bestseller'){
        $room_name = "Best Seller";
      }
        return view('roomlist')->with('room_name', $room_name);
    }

    public function category(Request $request){
      if($request->room_name == 'livingroom'){
        $room_name = "Living Room";
      } else if($request->room_name == 'bedroom'){
        $room_name = "Bed Room";
      } else if($request->room_name == 'diningroom'){
        $room_name = "Dining Room";
      } else if($request->room_name == 'businessspace'){
        $room_name = "Business Space";
      } else if($request->room_name == 'kitchen'){
        $room_name = "Kitchen";
      }
      else if($request->room_name == 'new'){
        $room_name = "New";
      } else if($request->room_name == 'bestseller'){
        $room_name = "Best Seller";
      }
        return view('sofa')->with('category', $request->category)->with('room_name',$room_name);
    }
}
