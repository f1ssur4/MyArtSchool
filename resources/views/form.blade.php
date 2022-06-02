@extends('layouts.main')
@section('title', 'Request')

@section('content')
    <form action="{{route('request')}}" method="POST">
        @csrf
        <div style="width: 500px; margin-left: 20px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Surname</label>
                <input class="form-control" name="surname">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="info" rows="3"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    @error('send_request_success')
    <div class="alert alert-success">{{$message}}</div>
    @enderror
@endsection

