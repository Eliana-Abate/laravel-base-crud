@extends('layouts.main')

@section('content') 

<section id="form-create" class="pt-5">
    <h1 class="text-white text-center pb-5">Aggiungi un nuovo fumetto</h1>
    <div class="container pb-5">
        <div class="row border border-5 border-primary bg-white p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('comics.store')}}">
                @csrf

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="col-6 mb-3">
                          <label for="series" class="form-label">Serie</label>
                          <input type="text" class="form-control" id="series" name="series">
                    </div>
                </div>
                
                <div class="mb-3">
                    
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control"  id="description" name="description" style="height: 100px"></textarea>

                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Url copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="row mb-5">
                    <div class="col-4 mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="col-4 mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="col-4 mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-warning me-3" href="{{url()->previous()}}">Indietro</a>
                    <button type="reset" class="btn btn-secondary me-3">Reset</button>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </form>
        </div> 
    </div>
</section>

@endsection