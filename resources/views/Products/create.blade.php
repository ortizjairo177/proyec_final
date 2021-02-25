@extends('layouts.app')
@section('content')

<div class="p-3 mb-2 bg-secondary"  style="width: 800px; vertical-align: top;margin: 0 auto; " >
    <!-- <div class=" p-3 mb-2 bg-secondary  art-contactus "  > -->
        <h2 >  @lang('es.product.create_title')</h2>
        
            <form method="POST" class="needs-validations" action="/product" enctype="multipart/form-data" novalidate >
               @csrf                

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="text"  id="floatingInput" name="name" placeholder="name_product" 
                            class="form-control @error('name') is-invalid @enderror">
                            <label for="floatingInput">Nombre del Producto </label>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror  
                    </div> 
                    <div class="col-md">                           
                        <div class="form-floating mb-3 ">
                            <textarea type="text"  id="floatingInput" name="description" placeholder="anexar informacion" 
                            rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>                        
                            <label for="floatingInput">Descripción </label>
                        </div>
                        @error('description')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror 
                    </div> 
                </div>

                <div class="row g-2 ">
                    <div class="col-md">                
                        <input type="file"  id="floatingInput"  class="form-control form-control-lg" 
                                id="formFileLg" name="productcover" placeholder="imagen">                             
                        
                    </div>
                </div>
                <br>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="integer"  name="value" placeholder="value_product" 
                            class="form-control @error('value') is-invalid @enderror">
                            <label for="floatingInput">Valor $</label>                          
                        </div>
                        @error('value')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror 
                    </div>
                    <div class="col-md">   
                        <div class="form-floating mb-3 ">
                            <input type="integer"  id="floatingInput" name="quantity" placeholder="quant_product" 
                            class="form-control @error('quantity') is-invalid @enderror">
                            <label for="floatingInput">Cantidad </label>
                        </div>
                        @error('quantity')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror 
                    </div>
                    <div class="col-md">                                 
                        <div class="form-floating mb-3 ">
                            <select   id="floatingInput" name="status" placeholder="status" 
                            class="form-control @error('status') is-invalid @enderror">
                                <option value="activo">Activo </option>
                                <option value="Inactivo">Inactivo </option>
                            </select>
                            <label for="floatingInput">Estado </label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">                   
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="text"  id="floatingInput" name="seller" placeholder="seller" 
                            class="form-control @error('seller') is-invalid @enderror">
                            <label for="floatingInput">Vendedor </label>
                        </div>
                        @error('seller')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="text"  id="floatingInput" name="category" placeholder="category" 
                            class="form-control @error('category') is-invalid @enderror">
                            <label for="floatingInput">Categoria del Producto </label>
                        </div>
                        @error('category')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror
                    <div class="col-md">   
                </div>          

                <div class="boton-art" >                       
                    <button  class="btn btn-primary btn-lg" >Guardar</button>
                </div>      
            </form>
            <br>
    </div>
</div>
</div>
    
   

@endsection