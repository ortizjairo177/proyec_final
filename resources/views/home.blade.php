@extends('layouts.app')
@section('content')
    <!--  crear eventos para el borrado-->

    <div class="container-fluid  d-flex justify-content-center p-3 mb-2 bg-info" > 
                <div id="carouselExampleControls" class="carousel slide col-sm-12" data-ride="carousel">
                    <div class="carousel-inner "  >
                            <div class="carousel-item active">
                            <img src="{{ asset('images/banner1.jpg') }}" 
                            class="d-block w-100 img-fluid img-thumbnail" alt="banner1.">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('images/banner2.jpg') }}" 
                            class="d-block w-100 img-fluid img-thumbnail"  alt="banne2">
                            </div>                            
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" 
                    data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" 
                    data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div> 
        </div>   
        <br>
   
    <div class="contenedor">    

        <section class="sec-misprod">
                <iframe class="fp-video" max-width="560" height="230" src="https://www.youtube.com/embed/fJPuA6sLM4s"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <article class="ft-art ">
                    <h5> Venta Computadores ...</h5>
                    <p class="text-sm-left text-md-left text-lg-left text-xl-left ">
                        Encuentra pc de escritorio, laptops, impresoras, y demás accesorios con precios increibles,
                        aprovecha nuestros descuentos y promociones.</p>
                    <div class="boton-container">
                        <a href="https://www.falabella.com.co/falabella-co/category/cat171006/Computadores">
                            <div class="boton">Mas info</div>
                        </a>

                </article>
        </section>
        <section>

                <article>
                    <figure class="artfigure">
                        <img src="{{ asset('images/impresora1.jpg') }}" alt="imagen1">
                    </figure>
                    <div class="art-cont text-sm-left text-md-left text-lg-left text-xl-left ">
                        <h2> Mantenimiento Impresoras</h2>
                        <p>Realizamos mantenimiento en prevencion y correctivo 100% garantizado, aprovecha nuestros grandes descuentos.
                            Además fotocopiadores con todo lo relacionado en esta gama de productos.
                        </p>

                    </div>
                </article>

                <article>
                    <figure class="artfigure">
                        <img src="{{ asset('images/software.jpg') }}" alt="imagen2">
                    </figure>
                    <div class="art-cont">
                        <h2> Mantenimiento Software </h2>
                        <p>Realizamos mantenimie Generalnto en prevencion y correctivo 100% garantizado, aprovecha nuestros grandes descuentos.
                            Además fotocopiadores con todo lo relacionado en esta gama de productos.
                        </p>

                    </div>
                </article>
        </section>
        
    </div>
</div>

@endsection
