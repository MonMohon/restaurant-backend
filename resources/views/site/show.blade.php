@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">Latest Resturant</h3>
                    <h2>{{ $post->title }}</h2>
                    {!! $post->body !!}
                    <img src="{{ asset('images/') }}/{{ $post->image_url }}" alt="{{ $post->slug }}"/>
                    <p>
                    {{ $post->slug }}
                    </p>
                    <p>
                    {{ $post->area }}
                    </p>
                    <p>
                    {{ $post->country }}
                    </p>
                    <p>
                    {!! QrCode::size(250)->generate( $post->site_url ); !!}
                    </p>
                    <hr />
                    <h4>Display Comments</h4>
                    @include('resturants.comments', ['comments' => $post->comments, 'resturant_id' => $post->id])
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.store' ) }}">
                    @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="resturant_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection