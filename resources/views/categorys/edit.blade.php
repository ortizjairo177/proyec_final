@extends('layouts.app')
@section('content')      


    <div class="d-flex justify-content-center" >      
        <h2 >  @lang('es.category.update_title')</h2>
    </div> 
    <div class=" p-3 mb-2 bg-secondary  art-contactus " > 
            
            <form method="POST" class="needs-validations" action="/category/{{$category->id }}"enctype="multipart/form-data" novalidate >
                {{ csrf_field() }}
                @csrf
                @method('put')
                
                <div class="form-floating mb-3 ">
                    <input type="text"  id="floatingInput" name="category" placeholder="category" 
                    class="form-control @error('category') is-invalid @enderror" 
                    value="{{ old('category') }} {{$category->category }}">
                    <label for="floatingInput">Nombre de la categoria del Producto </label>
                </div>
                @error('category')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror  
                                        
                <div class="form-floating mb-3 ">
                    <textarea type="text"  id="floatingInput" name="description" placeholder="anexar informacion" 
                    rows="5" class="form-control @error('description') is-invalid @enderror">
                    {{$category->description }}</textarea>                        
                    <label for="floatingInput">Descripción </label>
                </div>
                @error('description')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror                

                <div class="boton-art" >                       
                <button  class="btn btn-primary btn-lg" >Guardar</button>
                </div>      
            </form>
        
    </div>

    <br>  <br>  <br>

@endsection