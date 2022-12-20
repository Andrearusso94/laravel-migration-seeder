@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Buongiorno Treni!!!</h1>
        <p class="col-md-8 fs-4">Scegli il treno in partenza!</p>
        <button class="btn btn-primary btn-lg" type="button">Vai Treno!!</button>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 g-4">

            @forelse($trains as $train)
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="https://www.trenitalia.com/content/dam/tcom/immagini/trenitalia-img/trasporto-regionale/416x359/416x359-Regionale-Francigena-treno.jpg" alt="">
                    <div class="card-body">
                        <h3>{{$train->stazione_di_partenza}}</h3>
                        <p>{{$train->data_di_partenza}} <span>{{$train->orario_di_partenza}}</span></p>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-12">
                not found train
            </div>
            @endforelse

        </div>
    </div>
</div>

@endsection('content')