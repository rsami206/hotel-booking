@extends('welcome')

@section('content')
<!-- our_room -->
<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($rooms as $room)
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('storage/'. $room->image)}}" alt="#" height="230px" /></figure>
                    </div>
                    <div class="bed_room">
                        <h3>{{$room->type}} Bad Room</h3>
                        <h5 class="mt-2">{{$room->price_per_night}}<small>/night</small></h5>
                        <div class="w-100" style="word-wrap: break-word; overflow-wrap: break-word;">
                            {!! $room->description !!}
                        </div>
                        <div class=" d-flex justify-content-around">
<<<<<<< HEAD
                            <a href="{{ route('room.detail' ,$room->id) }}" class="  theme_btn  detail-button  ">Details</a>
                            <a href="{{ route('book.room', ['room_id' => $room->id]) }}" class="  theme_btn button_hover ">book now</a>
=======
                            <a href="" class="  theme_btn  detail-button  ">Details</a>
                            <a href="" class="  theme_btn button_hover ">book now</a>
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
        <div class="btn-box">
            <a href="/">
                View All products
            </a>
        </div>
    </div>
</div>
<!-- end our_room -->
@endsection