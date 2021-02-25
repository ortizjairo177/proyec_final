@extends('layouts.app')
@section('content')


    <div class=""  style="width: 400px; vertical-align: top;margin: 0 auto ">
        <h2 >  @lang('es.seller.create_title')</h2>
        
            <form method="POST" class="needs-validations" action="/product" enctype="multipart/form-data" novalidate >
               @csrf
                
                <div class="form-floating mb-3 ">
                    <input type="text"  id="floatingInput" name="name" placeholder="name_seller" 
                    class="form-control @error('name') is-invalid @enderror">
                    <label for="floatingInput">Nombre completo </label>
                </div>
                @error('name')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror  
                <div class="form-floating mb-3 ">
                    <input type="text"  id="floatingInput" name="direction" placeholder="direction_seller" 
                    class="form-control @error('direction') is-invalid @enderror">
                    <label for="floatingInput">Direccion </label>
                </div>
                @error('direction')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror
                <div class="form-floating mb-3 ">
                    <select   id="floatingInput" name="status" placeholder="status" 
                    class="form-control @error('status') is-invalid @enderror">
                        <option value="activo">Activo </option>
                        <option value="Inactivo">Inactivo </option>
                     </select>
                    <label for="floatingInput">Estado </label>
                </div>
                    <div class="form-floating mb-3 ">
                    <input type="integer"  id="floatingInput" name="mobile" placeholder="mobile" 
                    class="form-control @error('mobile') is-invalid @enderror">
                    <label for="floatingInput">Celular </label>
                </div>
                @error('mobile')
                  <span class="invalid-feedback" role="alert"  ></span>
                     <b>{{$message}}</b>
                @enderror  
                <div class="form-floating mb-3 ">
                    <select   id="floatingInput" name="sex" placeholder="status" 
                    class="form-control @error('sex') is-invalid @enderror">
                        <option value="Masculino">Masculino </option>
                        <option value="Femenino>Femenino </option>
                     </select>
                    <label for="floatingInput">Estado </label>
                </div>  
                <div class="boton-art" >                       
                    <button  class="btn btn-primary btn-lg" >Guardar</button>
                </div>      
            </form>
        
    </div>


@endsection