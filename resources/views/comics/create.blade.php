@extends('layouts.main')

@section('content') 

<section id="form-create" class="pt-5">
    <h1 class="text-white text-center pb-5">Aggiungi un nuovo fumetto</h1>
    <div class="container">
        <div class="row border border-5 border-primary bg-white p-5">
            <form>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="col-6 mb-3">
                          <label for="series" class="form-label">Serie</label>
                          <input type="text" class="form-control" id="series" name="series" required>
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

                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                    <div class="col-4 mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" required>
                    </div>

                    <div class="col-4 mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                </div>

                
                
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
            

        </div>

       
    </div>
    

</section>



@endsection