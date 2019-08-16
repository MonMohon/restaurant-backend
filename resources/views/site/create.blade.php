@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('resturants.file_upload')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Resturant</div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(array('route' => 'resturants.store','method'=>'POST')) !!}
                        {!! Form::hidden('image_url', null, array('id' => 'image_url')) !!}
                        <div class="form-group">
                            <strong>Resturant Name:</strong>
                            {!! Form::text('title', null, array('placeholder' => 'Resturant Name','class' => 'form-control','required' => 'required')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Resturant History:</strong>
                            {!! Form::textarea('body', null, array('placeholder' => 'Resturant History','class' => 'form-control editor','required' => 'required')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Resturant Address:</strong>
                            {!! Form::text('area', null, array('placeholder' => 'Resturant Address','class' => 'form-control','required' => 'required')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {!! Form::select('country', $countries,[], array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Site URL:</strong>
                            {!! Form::text('site_url', null, array('placeholder' => 'URL','class' => 'form-control','required' => 'required')) !!}
                        </div>
                        <button id="btn-csubmit" type="submit" class="btn btn-primary">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection