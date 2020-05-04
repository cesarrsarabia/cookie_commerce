<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =  Producto::all();
        //dd($tareas);
        return view('productos.productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categorias = Categoria::all()->pluck('nombre', 'categoria_id')->toArray();
        
        return view('productos.productoForm',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Valida info ingresada
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255', // Valida el tipo de dato sea fecha
            'precio' => 'required|between:0,999.99',
        ]);

        //Si la seleccion de categoria es ninguna , agrega un null
        if($request->categoria_id == 0 ){
            $request->merge(['categoria_id' => null]);
        }

        Producto::create($request->all());
        return redirect()->route('producto.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.productoShow',compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        //$producto = Producto::find($id);
        $categorias = Categoria::all()->pluck('nombre', 'categoria_id')->toArray();
        
        return view('productos.productoForm', compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Producto $producto)
    {
        //
        //Valida que ls datos no estes vacios

        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255', // Valida el tipo de dato sea fecha
            'precio' => 'required|between:0,999.99',
        ]);
        if($request->categoria_id == 0 ){
            $request->merge(['categoria_id' => null]);
        }
        Producto::where('producto_id',$producto->producto_id)->update($request->except('_token','_method'));
      
        return redirect()->route('producto.show', $producto->producto_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
