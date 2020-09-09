@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('banco.create') }}" class="btn btn-primary">NUEVO BANCO</a>
    </div>

    <div class="col-md-12">
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($bancos as $banco)
          <tr>
            <td>{{ $banco->id }}</td>
            <td>{{ $banco->nombre }}</td>
            <td>
              {!! link_to_route('banco.edit', $title = 'editar', $parameters = [ $banco->id ], $attributes = []) !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


  </div>
</div>

@endsection
