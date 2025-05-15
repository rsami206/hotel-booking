@extends('admin.layout')

@section('main')
<div class="container">
    <h2 class="my-4">Add New Room</h2>

    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
<div class="mb-3 col-md-6">
    <label>Room Number</label>
    <input type="text" name="room_number" class="form-control" value="{{ old('room_number', $room->room_number ?? '') }}">
</div>
<div class="mb-3 col-md-6">
    <label>Type</label>
    <select name="type" class="form-control">
        @foreach(['single', 'double', 'luxury'] as $type)
        <option value="{{ $type }}" {{ (old('type', $room->type ?? '') == $type) ? 'selected' : '' }}>
            {{ ucfirst($type) }}
        </option>
        @endforeach
    </select>
</div>
</div>
<div class="row">
    <div class="mb-3 col-md-6">
        <label>Price</label>
        <input type="number" step="0.01" name="price_per_night" class="form-control" value="{{ old('price_per_night', $room->price_per_night ?? '') }}">
    </div>
    <div class="mb-3 col-md-6">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="available" {{ (old('status', $room->status ?? '') == 'available') ? 'selected' : '' }}>Available</option>
            <option value="unavailable" {{ (old('status', $room->status ?? '') == 'unavailable') ? 'selected' : '' }}>Unavailable</option>
        </select>
    </div>
</div>


<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $room->description ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Room Image</label>
    <input type="file" name="image" class="form-control">
    @if(!empty($room->image))
    <img src="{{ asset('storage/' . $room->image) }}" class="mt-2" width="100">
    @endif
</div>

        <button type="submit" class="btn btn-success">Create Room</button>
    </form>
</div>
@endsection
    