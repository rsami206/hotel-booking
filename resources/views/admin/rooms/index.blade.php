@extends('admin.layout')

@section('main')
<div class="container">
<<<<<<< HEAD
    <h2 class="my-4 ">Rooms List</h2>
    <a href="{{ route('rooms.create') }}" class="btn btn-success mb-3">+ Add Room</a>
=======
    <h2 class="my-4">Rooms List</h2>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">+ Add Room</a>
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Room #</th>
                <th>Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ ucfirst($room->type) }}</td>
                    <td>{{ $room->price_per_night }} Rs</td>
                    <td>{{ ucfirst($room->status) }}</td>
                    <td>
                        @if($room->image)
                            <img src="{{ asset('storage/' . $room->image) }}" width="80">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('rooms.edit', $room) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('rooms.destroy', $room) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this room?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $rooms->links() }}
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
