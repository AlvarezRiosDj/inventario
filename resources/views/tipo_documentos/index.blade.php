@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('tipo_documento.create') }}" class="btn btn-primary">NUEVO TIPO DOCUMENTO</a>
    </div>

    <div class="col-md-12 mt-3">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <table class="table table-bordered mt-3">
        <thead>
          <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($tipo_documentos as $tipo_documento)
          <tr>
            <td>{{ $tipo_documento->id }}</td>
            <td>{{ $tipo_documento->nombre }}</td>
            <td>
              {!! link_to_route('tipo_documento.edit', $title = 'editar', $parameters = [ $tipo_documento->id ], $attributes = []) !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


  </div>
</div>

@endsection
