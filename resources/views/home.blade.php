@extends('layouts.main')

@section('title') Home @endsection

@section('content')
    <div class="container vh-100 d-flex align-items-center justify-content-center text-white">
        <h1>Go to <a href="{{route('comics.index')}}">Comics</a> ...</h1>
    </div>
    
@endsection
