@extends('welcome')

@section('content')
<div class="container py-4 mt-5">
    <h3 class="mb-4 mt-5 ">
        <i class="fas fa-calendar-plus text-success me-2"></i>Book Room #{{ $room->id }}
    </h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($errors->has('room_unavailable'))
        <div class="alert alert-danger">{{ $errors->first('room_unavailable') }}</div>
    @endif

    <form action="{{ route('book.room.store') }}" method="POST" class="card p-4 shadow rounded-4">
        @csrf

        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <div class="row">
        <div class="mb-3 col-md-6">
            <label for="check_in" class="form-label"><i class="fas fa-sign-in-alt me-1 text-primary"></i> Check-in Date</label>
            <input type="date" name="check_in" id="check_in" class="form-control" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="check_out" class="form-label"><i class="fas fa-sign-out-alt me-1 text-danger"></i> Check-out Date</label>
            <input type="date" name="check_out" id="check_out" class="form-control" required>
        </div>
        </div>

        <button type="submit" class="btn btn-success w-25">
            <i class="fas fa-check-circle me-1 text-white"></i> Book Now
        </button>
    </form>
</div>
@endsection
