@extends('layouts.app')
@section('content')

<section class="py-4 text-sm-center  text-md-center  text-lg-center text-xl-center sect-cont" >
        <div class="container-fluid ">   

            <h2 class="display-6 mx-auto " style="width: 600px;" > {{__('es.product.mis products')}} </h2>
            <P class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos deserunt cumque fugit minima
                provident nobis ut non doloremque quidem saepe veritatis eaque, <br> omnis iste obcaecati illo a fuga tenetur.
                Cum neque ab quam iure alias tempore dignissimos provident, expedita tenetur!</P> 
        </div>

</section>

<section class="sect-prod" >

        <div class="container ">
            <div class="row card_fila ">

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top"  max-width="100% " height="230"  src="{{ asset('images/portatil.jpg') }}" alt="card1">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Portatiles</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="infprod_portat.html" >
                            <button type="button" class="btn btn-primary btn-lg"> Comprar</button></a>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod ">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/celular.jpg') }}" alt="card2">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Celular</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="infprod_cel.html" >
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button></a>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/camaras.jpg') }}" alt="card3">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Camaras</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/monitor1.jpg') }}" alt="card4">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Monitores</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>        
               
            </div>
            <div class="row card_fila">

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/portatil.jpg') }}" alt="card5">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Portatiles</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230"src="{{ asset('images/portatil.jpg') }}" alt="card6">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Portatiles</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/impresora2.jpg') }}" alt="card7">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Impresoras</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/monitor2.jpg') }}" alt="card8">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Monitores</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>         
            </div>
            <div class="row card_fila">

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top"  max-width="100% " height="230" src="{{ asset('images/impresora1.jpg') }}" alt="card9">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Impresora</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/celular.jpg') }}" alt="card10">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Celular</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/camaras.jpg') }}" alt="card11">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Camaras</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 sect-prod">
            
                    <div class="card text-center">
                        <img class="card-img-top" max-width="100% " height="230" src="{{ asset('images/monitor3.jpg') }}" alt="card12">
                        <div class="card-body card-cont">
                            <h4 class="card-title">Monitores</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn btn-primary btn-lg">Comprar</button>
                        </div>
                    </div>
                    
                </div>         
               
            </div>
        </div>
</section>


@endsection