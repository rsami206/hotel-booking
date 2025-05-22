<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
{
    $bookings = booking::latest()->paginate(10);
    return view('admin.bookings.index', compact('bookings'));
}
}
