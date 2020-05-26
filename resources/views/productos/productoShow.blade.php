@extends('layouts.master')

@section('content')

    
<div class="row">
    <div class="col-lg-6 col-md-12 col-12 mx-auto">
        
            <div class="checkbox-form">						
                <h3>Detalles Producto</h3>
                <div class="row">
                    <div class="col-md-3 offset-0">                       
                            <span style="font-weight:bold">ID Producto:</span>
                            <label for="">{{$producto->producto_id}}</label>					                      
                    </div>   
                    
                    <div class="col-md-12" style="padding-top:30px;">
                        <div class="checkout-form-list">
                            
                           {{-- Zona Imagen--}}
                          
                        
                            
                            	
                        </div>
                    </div>
                    <div class="col-md-12" style="padding-top:30px;">
                        <div class="checkout-form-list">
                            <label>Nombre Producto</label>
                            <input type="text" value="{{$producto->nombre}}" disabled>					
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Descripción</label>
                            <textarea rows="5" disabled>{{$producto->descripcion}}</textarea>                            		
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Categoria</label>
                            <input type="text" value="{{$producto->categoria->nombre}}" disabled>					
                        </div>
                    </div>
                    <div class="col-md-3 offset-0">                       
                        <label  style="font-weight:bold;">Precio:</label>                       
                        <label style="font-size: 20px">$ {{$producto->precio}}</label>					                      
                    </div>     

                    
                 
                </div>	
                 
                <div class="row">
                    <div class="col-md-6">                        
                        <a href="{{route('producto.edit',$producto)}}" class="menu-btn btn-hover">Editar</a>
                    </div>                   
                    <br>
                    <br>
                    <div class="col-md-6">
                        
                        <form action="{{route('producto.destroy',$producto)}}" method="POST">
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