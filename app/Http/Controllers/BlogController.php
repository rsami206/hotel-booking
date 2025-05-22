<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class BlogController extends Controller
{
<<<<<<< HEAD
   public function index(){
        $rooms = Room::latest()->paginate(5);
        
        return view('blog.index',['rooms' =>$rooms]);
}
   public function detail($id){
        $room = Room::where('id', $id)->firstOrFail();
        // dd($room);
        return view('blog.detail',['room'=>$room]);
    }
public function about(){
        return view('blog.about');
}
}
=======
    public function index(){
        $rooms = Room::latest()->paginate(5);
        
        return view('blog.index',['rooms' =>$rooms]);
    }
}
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
