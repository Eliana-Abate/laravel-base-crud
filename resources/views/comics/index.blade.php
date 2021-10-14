@extends('layouts.main')

@section('title') Comics @endsection

@section('content') 
    <section id="comics-list" class="pt-5">
        <h1 class="text-white text-center pb-5">All Comics</h1>
        <div class="container">
            <div class="d-flex justify-content-center py-3">
                <a class="btn btn-warning me-3" href="{{route('home')}}">Home</a>
                <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi un nuovo fumetto</a>
            </div> 
            
            <table class="table bg-white border border-5 border-dark mb-5">
                <thead>
                  <tr>
                    <th class="p-3" scope="col">#id</th>
                    <th class="p-3" scope="col">Titolo</th>
                    <th class="p-3" scope="col">Descrizione</th>
                    <th class="p-3" scope="col">Copertina</th>
                    <th class="p-3" scope="col">Prezzo</th>
                    <th class="p-3" scope="col">Serie</th>
                    <th class="p-3" scope="col">Data</th>
                    <th class="p-3" scope="col">Tipologia</th>
                    <th class="p-3 text-center" scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <th class="p-3" scope="row">{{$comic->id}}</th>
                            <td class="p-3">{{$comic->title}}</td>
                            <td class="p-3 text-truncate" style="max-width: 300px;">{{$comic->description}}</td>
                            <td class="p-3">
                                <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}" width="80">
                            </td> 
                            <td class="p-3">{{$comic->price}}</td>
                            <td class="p-3">{{$comic->series}}</td>
                            <td class="p-3">{{$comic->sale_date}}</td>
                            <td class="p-3">{{$comic->type}}</td>
                            <td class="p-3 text-center">
                                <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">Show</a>
                                <a class="btn btn-warning mt-2" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                                <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mt-2" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        
                    @empty
                    
                        <tr class="text-center text-danger">
                            <th colspan="9"> Nessun fumetto disponibile</th>
                        </tr>
                        
                    @endforelse
                </tbody>
            </table>
        </div>

    </section>
@endsection