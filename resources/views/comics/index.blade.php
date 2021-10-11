@extends('layouts.main')

@section('title') Comics @endsection

@section('content') 
    <section id="comics-list" class="pt-5">
        <h1 class="text-white text-center pb-5">All Comics</h1>
        <div class="container">
            <table class="table bg-white border border-5 border-dark">
                <thead>
                  <tr>
                    <th class="p-3" scope="col">#</th>
                    <th class="p-3" scope="col">Title</th>
                    <th class="p-3" scope="col">Description</th>
                    <th class="p-3" scope="col">Cover</th>
                    <th class="p-3" scope="col">Price</th>
                    <th class="p-3" scope="col">Series</th>
                    <th class="p-3" scope="col">Sale Date</th>
                    <th class="p-3" scope="col">Type</th>
                    <th class="p-3" scope="col">Dettaglio</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <th class="p-3" scope="row">{{$comic->id}}</th>
                            <td class="p-3">{{$comic->title}}</td>
                            <td class="p-3 text-truncate" style="max-width: 300px;">{{$comic->description}}</td>
                            <td class="p-3">
                                <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}" width="30%">
                            </td> 
                            <td class="p-3">{{$comic->price}}</td>
                            <td class="p-3">{{$comic->series}}</td>
                            <td class="p-3">{{$comic->sale_date}}</td>
                            <td class="p-3">{{$comic->type}}</td>
                            <td class="p-3"><a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">Show</a></td>
                        </tr>
                        
                    @empty
                    
                        <tr class="text-center text-danger">
                            <th colspan="9"> Nessun fumetto disponibile</th>
                        </tr>
                        
                    @endforelse
                  
                </tbody>
            </table>

            <div class="text-center pt-4">
                <h6 class="text-warning">Return to <a href="{{route('home')}}">Home</a></h6>
            </div>

        </div>

    </section>
@endsection