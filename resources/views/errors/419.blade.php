@extends('layouts.app')
@section('title', 'Expired :: '.config('app.name'))
@section('content')
    <div class="col mx-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Page Expired</h3>
            </div>
            <div class="card-body">
                <h1>The page has expired due to inactivity.</h1>
                <p>Please refresh and try again.</p>
            </div>
        </div>
    </div>
@endsection

