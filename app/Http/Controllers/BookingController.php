<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = booking::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('blog.booking_index', compact('bookings'));
    }

    public function create(Request $request)
    {
        $room = Room::findOrFail($request->room_id);
        return view('blog.booking_form', compact('room'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

         $room = Room::findOrFail($request->room_id);
        // Check for date conflicts (only confirmed or pending bookings)
        $conflict = Booking::where('room_id', $request->room_id)
            ->whereIn('status', ['pending', 'confirmed'])
            ->where(function ($query) use ($request) {
                $query->whereBetween('check_in', [$request->check_in, $request->check_out])
                    ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
                    ->orWhere(function ($q) use ($request) {
                        $q->where('check_in', '<=', $request->check_in)
                            ->where('check_out', '>=', $request->check_out);
                    });
            })
            ->exists();

        if ($conflict) {
            return back()->withErrors(['room_unavailable' => 'Room is already booked during these dates.'])->withInput();
        }

        // Create booking
        Booking::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'status' => 'pending', // default
        ]);
         $room->status = 'unavailable';
    $room->save();

        return redirect()->route('bookings.index')->with('success', 'Booking submitted successfully!');
    }
}
