@extends('layouts.main')

@section('title') Home @endsection

@section('content')
<section id="home-container">
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center text-white">
        <h3>Fly to</h3>
        <h1><a class="text-warning" href="{{route('comics.index')}}">Comics</a></h1>
        <div class="img-flight-box superman-flight">
            <div class="img-bounce-box bounce">
                <img  src="{{asset('images/superman.png')}}" alt="superman">
            </div>  
        </div>  
    </div>
</section>
    
@endsection
