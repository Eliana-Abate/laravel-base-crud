@extends('layouts.main')

@section('content') 

<section id="form-create" class="pt-5">
    <h1 class="text-white text-center pb-5">Aggiungi un nuovo fumetto</h1>
    <div class="container">
        <div class="row border border-5 border-primary bg-white p-5">
            <form>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="col-6 mb-3">
                          <label for="" class="form-label">Serie</label>
                          <input type="text" class="form-control" id="">
                    </div>
                </div>
                
                <div class="mb-3">
                    
                    <label for="" class="form-label">Descrizione</label>
                    <textarea class="form-control"  id="" style="height: 100px"></textarea>

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Url copertina</label>
                    <input type="text" class="form-control" id="">
                </div>

                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="col-4 mb-3">
                        <label for="" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="col-4 mb-3">
                        <label for="" class="form-label">Tipologia</label>
                        <input type="text" class="form-control" id="">
                    </div>

                </div>

                
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            

        </div>

       
    </div>
    

</section>



@endsection