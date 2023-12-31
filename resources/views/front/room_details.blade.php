@extends('front.front_layout')

@section('content')
    <!-- Booking Start -->
    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Confirm Booking</h6>

            </div>
            <div class="row">
                <div class="col-4">Title</div>
                <div class="col-8">{{ $data->title }}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">Category</div>
                <div class="col-8">{{ $data->room_type->title }}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">Price</div>
                <div class="col-8">{{ $data->price }}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">Capacity</div>
                <div class="col-8">8</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">Booking Date</div>
                <div class="col-8">{{ $start_date }} to {{ $end_date }}</div>
            </div>
            <hr>
           
            <hr>
            <div class="row">
                <form action="{{ route('confirm_booking') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adult</label>
                        <select name="total_adult" class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Staying Hour</label>
                        <select name="total_clildren" class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                        </select>
                    </div>
                    <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="room_id" value="{{ $data->id }}">
                    <input type="hidden" name="checkin_date" value="{{ $start_date }} ">
                    <input type="hidden" name="checkout_date" value="{{ $end_date }} ">


                    {{--  <div class="mb-3">
                            <label for="duration" class="form-label">Select Booking Duration (in hours)</label>
                            <input type="number" name="hour" class="form-control"   min="1" max="24">
                        </div>  --}}



                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>

    </div>
@endsection
