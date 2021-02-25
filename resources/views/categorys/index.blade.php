@extends('layouts.app')
@section('content')

<div class="p-3 mb-2 bg-info text-dark">
    <div class="d-flex justify-content-end">        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear" data-whatever="@mdo">{{__('es.category.create_category')}}</button>
    </div>    
        <div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header p-3 mb-2 bg-info text-white">
                        <h5 class="modal-title" id="exampleModalLabel"> @lang('es.category.create_category')</h5>
                        
                        </button>
                    </div>
                    <div class="modal-body">
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
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                </div> 
                        </form>
                    </div>                
                </div>
            </div>
        </div>
     <div>
        <h2  class="text-center mt-3" > {{__('es.category.list_categorys_title')}}</h2>     
      </div>     

      <table class="table table-bordered p-3 mb-2 bg-secondary text-white text-white">
            <thead class="p-3 mb-2 bg-danger text-white text-center">
                <th >@lang('es.category.category')</th>
                <th >@lang('es.category.description')</th>
                <th >@lang('es.category.actions')</th>                
            </thead>
            <tbody>
                 @foreach ($categorys as $categ)
                   <tr  class="text-center">
                       <td > {{$categ->category}} </td>
                       <td > {{$categ->description}} </td>                
                          <td >                             
                            <div class="row "  >
                                <!-- <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">                                                    
                                    <div type="button class" class="btn btn-success">
                                        <a href="/category/{{$categ->id}}">
                                        <button class="material-icons" style="border:none;"> visibility
                                        </button>  </a>                             
                                    </div>                        
                                </div> -->
                                <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">                                                    
                                    <div type="button class" class="btn btn-primary">
                                        <a href="/category/{{$categ->id}}/edit">
                                        <button class="material-icons" style="border:none;"> border_color
                                        </button>  </a>                             
                                    </div>                                                 
                                </div>
                                <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">
                                    <form action="{{route('category.destroy',$categ->id)}}" method="POST">
                                        @CSRF
                                        @method('DELETE')
                                        <a  type="button class" class="btn btn-danger">
                                            <button type="button" class="material-icons" data-toggle="modal"style="border:none;" 
                                                  data-target="#exampleModal">delete_sweep 
                                            </button>
                                        </a>
                                                   
                                        <!-- Modal -->
                                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-3 mb-2 bg-info text-white">
                                                <div class="modal-header ">
                                                    <h5 class="modal-title " id="exampleModalLabel ">Esta seguro de eliminarlo?</h5>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form> 
                                </div>
                            </div>
                            </td>                       
                       
                    </tr>
                 @endforeach 
            </tbody>
    </table> 
</div>
@endsection