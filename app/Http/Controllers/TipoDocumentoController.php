<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTipoDocumento;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo_documentos = TipoDocumento::all();
   
        return view('tipo_documentos.index',['tipo_documentos'=>$tipo_documentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_documentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoDocumento $request)
    {
            
        $tipo_documento = TipoDocumento::create($request->all());
        $tipo_documento->save();

        return redirect()->route('tipo_documento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDocumento $tipoDocumento)
    {

        return view('tipo_documentos.editar',['tipo_documento' => $tipoDocumento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDocumento $tipoDocumento)
    {
        
        $tipoDocumento->id = $request->id;
        $tipoDocumento->nombre = $request->nombre;
        $tipoDocumento->save();
        
        return redirect()->route('tipo_documento.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDocumento $tipoDocumento)
    {
        //
    }
}
