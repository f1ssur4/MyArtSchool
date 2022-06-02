@extends('layouts.main')
@section('title', 'Arts')

@section('content')
<div style="margin: auto; text-align: center">
    <h1><b>ARTS</b></h1>
</div>
@foreach($arts as $art)
<div class="card" style="float: left">
    <img src="https://smartflix.ru/wp-content/uploads/2018/08/og_image_family.png" style="width: 200px;" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">@php echo $art->title@endphp</p>
    </div>
</div>
    @endforeach
@endsection
