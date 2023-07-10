@extends('admin.layout')
@section('content')
    <div class="container card">
        <div class="col-sm-6 p-md-2">
            <div class="welcome-text">
                <h4>Add Room</h4>

            </div>

        </div>

        <div class="card">
            <form action="{{ route('insert_room') }}" method="post" enctype="multipart/form">
                @csrf
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <div class="card-header">
                        <h4 class="card-title">Title</h4>
                    </div>
                    <input name="title" type="text" class="form-control" id="example name">
                </div>
                <br>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <div class="card-header">
                        <h4 class="card-title">Price</h4>
                    </div>
                    <input name="price" type="text" class="form-control" id="example name">
                </div>
                <br>
                @error('room_type_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="card-header">
                    <h4 class="card-title">Select Roomtype</h4>
                </div>

                <div class="form-group">
                    <select name="room_type_id" class="form-control">
                        <option>--select--</option>
                        <option default>Option 2</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection
