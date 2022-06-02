@extends('layouts.main')
@section('title', 'Instructors')

@section('content')
    <div style="margin: auto; text-align: center">
        <h1><b>INSTRUCTORS</b></h1>
    </div>
    @foreach($instructors as $instructor)
        <div class="card" style="float: left; width: 18em; height: 20em">
            <div class="card-body">
                <h5 class="card-title">@php echo $instructor->name . ' ' . $instructor->surname @endphp</h5>
                <h6 class="card-subtitle mb-2 text-muted">@php echo $instructor->arts->title @endphp</h6>
                <p class="card-text">@php echo $instructor->description@endphp</p>
{{--                <a href="{{route('instructors.update')}}" class="card-link">Update</a>--}}
            </div>
        </div>
    @endforeach
@endsection
