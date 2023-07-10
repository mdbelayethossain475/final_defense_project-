@extends('front.front_layout')

@section('content')
    <!-- Booking Start -->
    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h3>All Rooms Available for {{ $start_date }} to {{ $end_date }}</h3>
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="destination-item position-relative  mb-2">
                            <img class="img-fluid" src="{{ asset('') }}front/img/destination-2.jpg" alt="">
                            <form action="{{ url('/room_details' . '/' . $item->id) }}" method="get"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="check_in" value=" {{ $start_date }}">
                                <input type="hidden" name="check_out" value="{{ $end_date }}">
                                <a type="submit" class="destination-overlay text-white text-decoration-none">
                                    <h5 class="text-white">{{ $item->title }}</h5>
                                    <span>Category : {{ $item->room_type->title }}</span>
                                    <span> Cost : {{ $item->price }}</span>
                                    <button type="submit" class="btn btn-success">Book Now</button>
                                    
                                </a>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

@endsection
<!-- Modal -->

