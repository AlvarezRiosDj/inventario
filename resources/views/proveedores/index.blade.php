@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('proveedor.create') }}" class="btn btn-primary">NUEVO PROVEEDOR</a>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TIPO DOCUMENTO</th>
                        <th>RAZON SOCIAL</th>
                        <th>CREADO</th>
                        <th>MODIFICADO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->tipo_documento_id }}</td>
                        <td>{{ $proveedor->razon_social }}</td>
                        <td>{{ $proveedor->created_at }}</td>
                        <td>{{ $proveedor->updated_at }}</td>
                        <td>
                        {!! link_to_route('proveedor.edit', $title = 'editar', $parameters = [ $proveedor->id ], $attributes = []) !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection