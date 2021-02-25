@extends('layouts.app')
@section('content')

<div class="p-3 mb-2 bg-info text-dark">
    <div class="d-flex justify-content-end">
    <a    href="/product/create" class="btn btn-secondary"> {{__('es.product.create_title')}}</a>
    <a class="btn btn-secondary" href="{{ route('listadoproductos') }}">{{__('es.product.list_products')}}</a> 
    
    </div>
    <div class="p-3 mb-2 bg-info text-dark">
      <h1  class="text-center mt-3"> {{__('es.product.list_products_title')}}</h1>
    </div>
      <table class="table table-bordered p-3 mb-2 bg-secondary text-white">
            <thead class="table-dark text-center">
                <th scope="col">@lang('es.product.name')</th>
                <th scope="col">@lang('es.product.value')</th>
                <th scope="col">@lang('es.product.status')</th>
                <th scope="col">@lang('es.product.quantity')</th>
                <th scope="col">@lang('es.product.actions')</th>    
            </thead>
            <tbody>
                 @foreach ($products as $prod)
                   <tr class="text-center">
                       <td> {{$prod->name}} </td>
                       <td>$ {{ number_format($prod->value,2) }} </td>
                       <td> {{$prod->status}} </td>
                       <td> {{$prod->quantity}} </td>
                       <!-- <td> {{$prod->category}} no trae la categoria</td>-->
                        <td >                             
                            <div class="row "  >
                                    <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">                                                    
                                        <div type="button class" class="btn btn-success">
                                            <a href="/product/{{$prod->id}}">
                                            <button class="material-icons" style="border:none;"> visibility
                                            </button>  </a>                             
                                        </div>                        
                                    </div>
                                    <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">                                                    
                                        <div type="button class" class="btn btn-primary">
                                            <a href="/product/{{$prod->id}}/edit">
                                            <button class="material-icons" style="border:none;"> border_color
                                            </button>  </a>                             
                                        </div>                        
                                    </div>
                                <div class="col-4 col-sm-4  subitem" style="width: 20%;margin: 10px auto">
                                    <form action="{{route('product.destroy',$prod->id)}}" method="POST">
                                        @CSRF
                                        @method('DELETE')
                                        <!-- <a href="#" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Eliminar registro</a> -->
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
