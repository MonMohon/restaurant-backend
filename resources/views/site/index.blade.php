@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Featured Menu</h2>
            <p>Extra Text goes here</p>
        </div>
        @foreach($posts as $post)
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-rating">4.7</div>
                <a href="{{ url('/resturant') }}/{{ $post->slug }}">
                    <img class="card-img-top" src="{{ asset('images/') }}/{{ $post->image_url }}" alt="{{ $post->slug }}"/>
                </a>
                <div class="card-block">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <div class="card-text">
                    {{ $post->area }},
                    {{ $post->country }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
