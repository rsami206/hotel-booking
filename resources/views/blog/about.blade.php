@extends('welcome')

@section('title', 'About Us - UrbanNest')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">About <span class="text-primary">UrbanNest</span></h1>
        <p class="lead text-muted">Redefining your hotel booking experience with ease and elegance.</p>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://images.unsplash.com/photo-1600585152933-61d1e9029e2d?auto=format&fit=crop&w=1600&q=80
" class="img-fluid rounded-4 shadow" alt="UrbanNest Hotel">
        </div>
        <div class="col-md-6">
            <h3 class="fw-semibold">Who We Are</h3>
            <p class="text-muted">
                UrbanNest is a modern hotel booking platform designed to make your stay effortless and enjoyable. We connect guests with a wide range of comfortable and affordable rooms that are tailored to suit your travel needs.
            </p>
            <p class="text-muted">
                With a focus on reliability, security, and user experience, our system ensures rooms are automatically marked unavailable when booked, and reappear once the stay is over — so availability is always accurate.
            </p>
        </div>
    </div>

    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://source.unsplash.com/featured/?hotel,lobby" class="img-fluid rounded-4 shadow" alt="UrbanNest Lobby">
        </div>
        <div class="col-md-6">
            <h3 class="fw-semibold">Why Choose Us</h3>
            <ul class="list-unstyled text-muted">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-time room availability updates</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Clean and modern user interface</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Easy booking with instant confirmation</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Customer-first support and reliability</li>
            </ul>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('index') }}" class="btn btn-outline-primary btn-lg px-4">Back to Home</a>
    </div>
</div>
@endsection
