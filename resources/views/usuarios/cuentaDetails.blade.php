@extends('layouts.master')


@section('content')

    
<div class="row">
    <div class="col-lg-6 col-md-12 col-12 mx-auto">
        
            <div class="checkbox-form">						
                <h3>Mi cuenta</h3>
                <div class="row">
                    
                                       
                    <div class="col-md-12" style="padding-top:30px;">
                        <div class="checkout-form-list">
                            <label>Nombre</label>
                            <input type="text" value="{{$user->nombre}}" readonly>					
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Apellido</label>
                            <input type="text" readonly value="{{$user->apellido}}">                            		
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>email</label>
                            <input type="text" value="{{$user->email}}" readonly>					
                        </div>
                    </div>
                    <div class="col-md-3 offset-0">                       
                        <label  style="font-weight:bold;">Fecha Registro:</label>                       
                        <label style="font-size: 20px"> {{
                        \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</label>					                      
                    </div>     

                    
                 
                </div>	
                
                <div class="row">
                   
                    @can('CanModify',$user)
                    <div class="col-md-6">                        
                        <a href="{{route('usuario.edit',$user)}}" class="menu-btn btn-hover">Editar</a>
                    </div>   
                    @endcan
                                    
                    <br>
                    <br>
                    {{-- 
                    <div class="col-md-6">
                        
                        <form action="{{route('producto.destroy',$producto)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border-right:0px;border-bottom:0px;" class="menu-btn-danger btn-hover float-right">Eliminar</button>                            
                        </form>    
                    </div>
                   --}} 	
                </div>	
                										
            </div>
        
    </div>	
   
</div>

@endsection