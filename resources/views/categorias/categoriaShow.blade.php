@extends('layouts.master')

@section('content')
    
<div class="row">
    <div class="col-lg-6 col-md-12 col-12 mx-auto">
        
            <div class="checkbox-form">						
                <h3>Detalles Categoria</h3>
                <div class="row">
                    <div class="col-md-3 offset-0">                       
                            <span style="font-weight:bold">ID Categoria:</span>
                            <label for="">{{$categoria->categoria_id}}</label>					                      
                    </div>                    
                    <div class="col-md-12" style="padding-top:30px;">
                        <div class="checkout-form-list">
                            <label>Nombre Categoria</label>
                            <input type="text" value="{{$categoria->nombre}}" disabled>					
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Descripción</label>
                            <textarea rows="5" disabled>{{$categoria->descripcion}}</textarea>                            		
                        </div>
                    </div>
                    
                    
                 
                </div>	
                <div class="row">
                    <div class="col-md-6">                        
                        <a href="{{route('categoria.edit',$categoria->categoria_id)}}" class="menu-btn btn-hover">Editar</a>
                    </div>                   
                    <br>
                    <br>
                    <div class="col-md-6">
                        
                        <form action="{{route('categoria.destroy',$categoria->categoria_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border-right:0px;border-bottom:0px;" class="menu-btn-danger btn-hover float-right">Eliminar</button>                            
                        </form>    
                    </div>
                   
                </div>												
            </div>
        
    </div>	
   
</div>

@endsection