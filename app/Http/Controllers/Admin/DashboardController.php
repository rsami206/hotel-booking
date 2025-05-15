<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.index',[
            // 'totalBookings' => Booking::count(),
            'availableRooms' => Room::where('status', 'available')->count(),
            // 'customers' => User::where('role', 'customer')->count(),
            // 'revenue' => Booking::sum('total_price'),
            // 'recentBookings' => Booking::latest()->take(5)->get(),
        ]);
    }
    
}
