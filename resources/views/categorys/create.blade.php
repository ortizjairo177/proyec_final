@extends('layouts.app')
@section('content')      

<!-- nota esta creado en tipo modal en la pag de index -->
    <div class=""  style="width: 400px; vertical-align: top;margin: 0 auto ">
        <h2 >  @lang('es.category.create_title')</h2>
        
            <form method="POST" class="needs-validations" action="/category" enctype="multipart/form-data" novalidate >
               @csrf
                
                <div class="form-floating mb-3 ">
                    <input type="text"  id="floatingInput" name="category" placeholder="category" 
                    class="form-control @error('category') is-invalid @enderror">
                    <label for="floatingInput">Nombre de la categoria del Producto </label>
                </div>
                @error('category')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror  
                                        
                <div class="form-floating mb-3 ">
                    <textarea type="text"  id="floatingInput" name="description" placeholder="anexar informacion" 
                    rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>                        
                    <label for="floatingInput">Descripción </label>
                </div>
                @error('description')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror                

                <div class="boton-art" >                       
                <button  class="btn btn-primary btn-lg" >Guardar Registro</button>
                </div>      
            </form>
        
    </div>



@endsection