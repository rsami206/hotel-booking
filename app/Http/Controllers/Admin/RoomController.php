<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $rooms = Room::latest()->paginate(10);
    return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.rooms.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $data = $request->validate([
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
    return redirect()->route('rooms.index')->with('success', 'Room created successfully.');    
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
     return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $data = $request->validate([
        'room_number' => 'required|unique:rooms,room_number,' . $room->id,
        'type' => 'required',
        'price_per_night' => 'required|numeric',
        'description' => 'nullable',
        'status' => 'required',
        'image' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
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
         $room->delete();
    return back()->with('success', 'Room deleted.');
    }
}
