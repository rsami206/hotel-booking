@extends('admin.layout')

@push('style')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

@endpush
@section('main')
<<<<<<< HEAD
    <div class="container">
    <h2 class="my-4">Add New Room</h2>
     <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" id="createform">
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
=======
<div class="container">
    <h2 class="my-4">Add New Room</h2>

    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data" id="createform">
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
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
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
<<<<<<< HEAD
                  <option value="available" {{ (old('status', $room->status ?? '') == 'available') ? 'selected' : '' }}>Available</option>
                  <option value="unavailable" {{ (old('status', $room->status ?? '') == 'unavailable') ? 'selected' : '' }}>Unavailable</option>
                </select>
            </div>
        </div>
            {{-- Description (Full Width) --}}
=======
                    <option value="available" {{ (old('status', $room->status ?? '') == 'available') ? 'selected' : '' }}>Available</option>
                    <option value="unavailable" {{ (old('status', $room->status ?? '') == 'unavailable') ? 'selected' : '' }}>Unavailable</option>
                </select>
            </div>
        </div>

         {{-- Description (Full Width) --}}
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
        <div class="mb-3">
           <label for="description" class="form-label" style="font-weight: 700;">Description</label>
           <textarea id="description" name="description" class="d-none form-control @error              ('description')     is-invalid @enderror" rows="3">{{ old('description')}}</textarea>
          <div id="editor" class="bg-light" style="height: 200px"></div>
        </div>
        <div class="mb-3">
            <label>Room Image</label>
            <input type="file" name="image" class="form-control">
            @if(!empty($room->image))
            <img src="{{ asset('storage/' . $room->image) }}" class="mt-2" width="100">
            @endif
        </div>
<<<<<<< HEAD
        <button type="submit" class="btn btn-success">Create Room</button>
    </form>
    </div>
    @push('script')
=======

        <button type="submit" class="btn btn-success">Create Room</button>
    </form>
</div>
@push('script')
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    const quill = new Quill('#editor', {
      theme: 'snow'
    });

    document.querySelector('#createform').addEventListener('submit', function(e){
        e.preventDefault();
        const textarea = document.querySelector('#description');
        const html = quill.getSemanticHTML();
        textarea.value = html;
        document.querySelector("#createform").submit();
    });
  </script>
@endpush
@endsection