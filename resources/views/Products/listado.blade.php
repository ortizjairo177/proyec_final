@extends('layouts.app')
@section('content')

<div class="p-3 mb-2 bg-info text-dark">
    <div class="d-flex justify-content-end">
    <a    href="/product/create" class="btn btn-secondary"> {{__('es.product.create_title')}}</a>    
    </div>
    <div class="p-3 mb-2 bg-info text-dark">
      <h1  class="text-center mt-3"> {{__('es.product.list_products_title')}}</h1>
    </div>
    <div class="row card_fila ">
        @foreach ($products as $prod)

            <div class="col-md-3 sect-prod">
                
                <div class="card text-center">
                    <img class="card-img-top"  max-width="100% " height="230"  src="{{ asset('storage/'.$prod->image) }}" alt="card1">
                    <div class="card-body card-cont">
                        <h4 class="card-title">  {{$prod->name}} </h4>
                        <p class="card-text"> $ {{ number_format($prod->value,2) }}</p> 
                        <a href="infprod_portat.html" >
                        <button type="button" class="btn btn-primary btn-lg"> Comprar</button></a>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

</div>
      
@endsection



