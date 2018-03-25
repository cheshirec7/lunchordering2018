@extends('layouts.app')
@section('title', '404 :: '.config('app.name'))
@section('content')
    <div class="col mx-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h3>{!! trans('http.404.title') !!}</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-danger">
                    <p>{!! trans('http.404.description') !!}</p>
                    {!! link_to_route('home', 'Back to home') !!}
                </div>
            </div>
        </div>
    </div>
@endsection