@extends('layouts.main')

@section('title') Comics @endsection

@section('content') 
    <section id="comics-list">
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->thumb}}</td> 
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                        </tr>
                        
                    @empty
                    
                        <tr class="text-center text-danger">
                            <th colspan="8"> Nessun fumetto disponibile</th>
                        </tr>
                        
                    @endforelse
                  
                </tbody>
              </table>

              <div class="text-center">
                <h4>Go to <a href="{{route('home')}}">Home</a></h4>
        
            </div>

        </div>

    </section>
@endsection