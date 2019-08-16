@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="clearfix">
                <h1 class="left">Manage Resturant</h1>
                <a href="{{ route('resturants.create') }}" class="btn btn-success right">Create Resturant</a>            
            </div>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('resturants.show', $post->id) }}" class="btn btn-primary">View Resturant</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $posts->links() !!}
        </div>
    </div>
</div>
@endsection
