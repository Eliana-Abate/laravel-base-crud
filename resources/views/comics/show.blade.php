@extends('layouts.main')

@section('title', $comic->title)

@section('content') 
    <section id="comic-detail" class="pt-5">
        <h1 class="text-white text-center pb-5">Comic details</h1>
        <div class="container">
            <div class="row border border-5 border-primary bg-white p-5">
                <div class="col-3 d-flex flex-column justify-content-center">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}" width="80%">
                </div>
                <div class="col-3 d-flex flex-column justify-content-center">
                    <p class="text-primary">Price: <span class="text-dark">{{$comic->price}}</span></p>
                    <p class="text-primary">Series: <span class="text-dark">{{$comic->series}}</span></p>
                    <p class="text-primary">Sale Date: <span class="text-dark">{{$comic->sale_date}}</span></p>
                    <p class="text-primary">Type: <span class="text-dark">{{$comic->type}}</span></p>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center">
                    <h2>{{$comic->title}}</h2>
                    <p>{{$comic->description}}</p>
                </div>
    
            </div>
        </div>
        

    </section>
    
@endsection