@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Featured Menu</h2>
            <p>Extra Text goes here</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-rating">4.7</div>
                <img class="card-img-top" src="https://picsum.photos/200/150/?random"/>
                <div class="card-block">
                    <h4 class="card-title">Bamboo Soot</h4>
                    <div class="card-text">
                        Guwahati, India
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection