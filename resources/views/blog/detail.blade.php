@extends('welcome')

@section('content')
<style>
    .status-circle {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
    }
</style>
<div class="container py-5 mt-5">
  
        <div class="row g-0 h-50">
            <div class="col-md-5 mt-5">
                <img src="{{ asset('storage/' . $room->image) }}" class="img-fluid h-100 object-fit-cover" alt="Room Image">
            </div>
            <div class="col-md-7 mt-5">
                <div class="card-body p-4">
                    <h3 class="card-title mb-3">Room #{{ $room->id }}</h3>

                    <!-- Status -->
                    <p class="mb-2">
                        <span 
                                class="status-circle me-2"
                                style="background-color: {{ $room->status === 'available' ? 'green' : 'red' }};">
                            </span>     
                        <strong style="font-weight: 600">Status : </strong>
                        <span class="ms-2 d-inline-flex align-items-center">
                          
                            {{ ucfirst($room->status) }}
                        </span>
                    </p>

                    <!-- Type -->
                    <p class="mb-2">
                        <i class="fas fa-door-open me-2 text-primary"></i>
                        <strong style="font-weight: 600">Type : </strong> {{ $room->type }}
                    </p>

                    <!-- Description -->
                    <div class="mb-3" style="word-wrap: break-word; overflow-wrap: break-word;">
                        <i class="fas fa-align-left me-2 text-secondary"></i>
                        <strong style="font-weight: 600">Description : </strong><br>
                        {!! $room->description !!}
                    </div>

                    <!-- Price -->
                    <p class="mb-2">
                        <i class="fas fa-dollar-sign me-2 text-success"></i>
                        <strong style="font-weight: 600">Price per Night :</strong> ${{ number_format($room->price_per_night, 2) }}
                    </p>
                      <!-- Book Now Button -->
                <a href="{{ route('book.room', ['room_id' => $room->id]) }}" class="btn btn-success mt-3">
                    <i class="fas fa-calendar-check me-2"></i> Book Now
                </a>
                </div>
              

            </div>
        </div>
</div>

<!-- Style for status circle -->

@endsection
