<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class BlogController extends Controller
{
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