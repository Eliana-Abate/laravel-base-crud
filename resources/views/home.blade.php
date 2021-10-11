@extends('layouts.main')

@section('title') Home @endsection

@section('content')
    <div class="container text-center">
        <h1>Go to <a href="{{route('comics.index')}}">Comics</a></h1>

    </div>
    
@endsection
