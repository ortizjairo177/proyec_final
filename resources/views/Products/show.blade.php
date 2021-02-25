@extends('layouts.app')
@section('content')


<div class="card mb-3 p-3 mb-2 bg-secondary  seccion-prod"  >
    <div class="p-3 mb-2 bg-info text-dark">
        <h3  class="text-center mt-3">Descripción: {{ $product->name}}</h3>
    </div>   

  <div class="row no-gutters">
    <div class="col-md-6">
    <img src="{{ url(Storage::url($product->image))}}" class="card-img-top img-fluid" alt="imagenstor">
    </div>
    <div class="col-md-6 p-3 mb-2 bg-success text-white text-center" >
                        <div class="p-3 mb-2 bg-danger text-white">
                            <h5 class="card-title">$ {{ number_format($product->value,2) }}</h5>
                        </div>
                        <div class="p-3 mb-2 bg-warning text-dark">
                            <h5 > Estado {{ $product->status}}</h5>
                        </div>
                        <div class="p-3 mb-2 bg-info text-white">
                            <h5 class="card-title">Disponibles {{ $product->quantity}}</h5>                           
                        </div>  
                        <div class="p-3 mb-2 bg-dark text-white">
                            <h5 class="card-title"> {{ $product->description}}</h5>                           
                        </div>                                       
                    </div>                   
                    
  </div> 
    <div class="d-flex justify-content-center ">    
        <a class="btn btn-primary" href="/product/">Regresar</a>
    </div>
</div>



@endsection
