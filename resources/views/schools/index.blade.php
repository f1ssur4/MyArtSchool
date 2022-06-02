@extends('layouts.main')
@section('title', 'Schools')

@section('content')
    <div style="margin: auto; text-align: center">
        <h1><b>SCHOOLS</b></h1>
    </div>
    @foreach($schools as $school)
        <div class="card" style="float: left; width: 18em; height: 8em">
            <div class="card-body">
                <h5 class="card-title">@php echo $school->address @endphp</h5>
                {{--                <a href="{{route('instructors.update')}}" class="card-link">Update</a>--}}
            </div>
        </div>
    @endforeach
@endsection
