@extends('layouts.app')
@section('content')      

    <div class="p-3 mb-2 bg-secondary"  style="width: 800px; vertical-align: top;margin: 0 auto; " >

    <div class="p-3 mb-2 bg-info text-dark">
      <h3  class="text-center mt-3"> @lang('es.product.update_title')</h3>
    </div>       

            <form method="POST" class="needs-validations " action="/product/{{ $product->id }}" enctype="multipart/form-data" novalidate >
               {{ csrf_field() }}
               @csrf
                @method('put')

                <div class="form-row row ">
                    <div class="col-12 col-md-12 col-sm-12 ">                        
                        <input type="file" name="productcover" class="form-control">                                                
                    </div>
                </div>
                <br>
                <div class="form-row row ">
                    <div class="col-12 col-md-12 col-sm-12 ">
                        <img src= "{{ url(Storage::url($product->image))}}" class="img-fluid rounded mx-auto d-block">
                        
                    </div>                    
                </div>
                </br>
                <div class="form-row row">
                        <div class="form-floating mb-3 col-12 col-md-6 col-sm-6" >
                            <input type="text"  id="floatingInput" name="name" placeholder="name_product" 
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }} 
                                {{$product->name }}" >
                            <label for="floatingInput">Nombre del Producto </label>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror  
                                        
                        <div class="form-floating mb-3 col-12 col-md-6 col-sm-6">
                            <textarea type="text"  id="floatingInput" name="description" placeholder="anexar informacion" rows="5" 
                            class="form-control @error('description') is-invalid @enderror" >
                            {{$product->description }} </textarea>                        
                            <label for="floatingInput">Descripción </label>
                        </div>
                        @error('description')
                        <span class="invalid-feedback" role="alert"  ></span>
                            <b>{{$message}}</b>
                        @enderror 
                </div>
                <div class="form-row row">
                            <div class="form-floating mb-3  col-12 col-md-4 col-sm-4">
                                <input type="integer"  id="floatingInput" name="value" placeholder="value_product" 
                                class="form-control @error('value') is-invalid @enderror"
                                value="{{ old('value') }}  {{ $product->value }}" >                               
                                <label for="floatingInput">Valor </label>
                            </div>
                            @error('value')
                            <span class="invalid-feedback" role="alert"  ></span>
                                <b>{{$message}}</b>
                            @enderror    
                            <div class="form-floating mb-3 col-12 col-md-4 col-sm-4">
                                <input type="integer"  id="floatingInput" name="quantity" placeholder="quanti_product" 
                                class="form-control @error('quantity') is-invalid @enderror"
                                value="{{ old('quantity') }} {{$product->quantity }}" >
                                <label for="floatingInput">Cantidad </label>
                            </div>
                            @error('quantity')
                            <span class="invalid-feedback" role="alert"  ></span>
                                <b>{{$message}}</b>
                            @enderror 
                            <div class="form-floating mb-3 mb-3 col-12 col-md-4 col-sm-4 ">
                            <select   id="floatingInput" name="status" placeholder="status" 
                            class="form-control @error('status') is-invalid @enderror">
                                <option value="activo">Activo </option>
                                <option value="Inactivo">Inactivo </option>
                            </select>
                            <label for="floatingInput">Estado </label>
                    </div>                            

                </div>
                <div class="form-row row">                    
                    <div class="form-floating mb-3 mb-3 col-12 col-md-8 col-sm-4">
                        <input type="text"  id="floatingInput" name="seller" placeholder="seller" 
                        class="form-control @error('seller') is-invalid @enderror"
                        value="{{ old('seller') }} {{$product->seller }}" >
                        <label for="floatingInput">Vendedor </label>
                    </div>
                    @error('seller')
                    <span class="invalid-feedback" role="alert"  ></span>
                        <b>{{$message}}</b>
                    @enderror 
                    <div class="form-floating mb-3 mb-3 col-12 col-md-4 col-sm-4">
                        <input type="text"  id="floatingInput" name="category" placeholder="category" 
                        class="form-control @error('category') is-invalid @enderror"
                        value="{{ old('category') }} {{$product->category }}" >
                        <label for="floatingInput">Categoria del Producto </label>
                    </div>
                    @error('category')
                    <span class="invalid-feedback" role="alert" ></span>
                        <b>{{$message}}</b>
                    @enderror   
                    
                </div>
                <div class="boton-art" >                       
                <button  class="btn btn-primary btn-lg" >Guardar</button>
                <a class="btn btn-primary btn-lg text-white" href="/product/">Regresar</a>
                </div>      
            </form>
        
        </div>




@endsection