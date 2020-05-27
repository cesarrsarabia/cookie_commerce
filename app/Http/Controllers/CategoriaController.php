<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        //dd(($categorias));
        return view('categorias.categoriaIndex',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.categoriaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255' // Valida el tipo de dato sea fecha
        ]);
        Categoria::create($request->all());
        alert()->success('Categoria Agregada con éxito');
        return redirect()->route('categoria.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
       
        return view('categorias.categoriaShow',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
        
        return view('categorias.categoriaForm', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255', // Valida el tipo de dato sea fecha            
        ]);
      
        Categoria::where('categoria_id',$categoria->categoria_id)->update($request->except('_token','_method'));
        alert()->success('Categoria modificada con éxito');
        return redirect()->route('categoria.show', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
        $categoria->delete();
        alert()->success('Categoria eliminado con éxito','Eliminado');
        return redirect()->route('categoria.index');
    }
}
