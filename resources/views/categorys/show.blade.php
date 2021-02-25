@extends('layouts.app')
@section('content')

    <div class=""  style="width: 650px; vertical-align: top;margin: 0 auto ">
        <h2 >  @lang('es.category.show_title')</h2>
       </br>
        <div class="form-row row">
                <div class="col-12 col-md-6 col-sm-6">
                    <ul class="list-group list-group-flush text-center ">
                                <li class="list-group-item">$ {{$category->category }}</li>
                                <li class="list-group-item">Estado {{$category->description }}</li>                                                      
                    </ul>               
                </div>
                <div class="col-12">                
                   <a href="/category/" class="btn btn-info">Regresar</a>
                </div>                
        </div>

    </div>




@endsection
