<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProveedor;
use App\Http\Requests\UpdateProveedor;

class ProveedorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::orderBy('updated_at', 'desc')->get();
        return view('proveedores.index',['proveedores' => $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_documentos = TipoDocumento::orderBy('nombre')->pluck('nombre', 'id');
        return view('proveedores.crear', ['tipo_documentos' => $tipo_documentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProveedor $request)
    {
        $proveedor = Proveedor::create($request->all());
        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $tipo_documentos = TipoDocumento::orderBy('nombre')->pluck('nombre', 'id');
        return view('proveedores.editar', compact('proveedor', 'tipo_documentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProveedor $request, Proveedor $proveedor)
    {
           
      
        $proveedor->fill($request->all()); 
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
