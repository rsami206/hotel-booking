<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
         $rooms = Room::paginate(10);
=======
         $rooms = Room::latest()->paginate(10);
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
       return view('admin.rooms.create');
=======
         return view('admin.rooms.create');

>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $data = $request->validate([
=======
     $data = $request->validate([
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
        'room_number' => 'required|unique:rooms',
        'type' => 'required',
        'price_per_night' => 'required|numeric',
        'description' => 'nullable',
        'status' => 'required',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('rooms', 'public');
    }

    Room::create($data);
<<<<<<< HEAD
    return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
=======
    return redirect()->route('rooms.index')->with('success', 'Room created successfully.');    
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
            

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
<<<<<<< HEAD
        return view('admin.rooms.edit', compact('room'));
=======
     return view('admin.rooms.edit', compact('room'));
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
     public function update(Request $request, Room $room)
    {
        
=======
    public function update(Request $request, Room $room)
    {
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
        $data = $request->validate([
        'room_number' => 'required|unique:rooms,room_number,' . $room->id,
        'type' => 'required',
        'price_per_night' => 'required|numeric',
        'description' => 'nullable',
        'status' => 'required',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
<<<<<<< HEAD
         if($room->image && Storage::disk('public')->exists($room->image)) {
                Storage::disk('public')->delete($room->image);
            } 
=======
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
        $data['image'] = $request->file('image')->store('rooms', 'public');
    }

    $room->update($data);
    return redirect()->route('rooms.index')->with('success', 'Room updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
<<<<<<< HEAD
        $room->delete();
=======
         $room->delete();
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    return back()->with('success', 'Room deleted.');
    }
}
