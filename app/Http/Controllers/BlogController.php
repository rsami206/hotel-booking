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
}
