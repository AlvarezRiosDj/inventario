@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-4">

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          
        {!! Form::model($proveedor, ['route' => ['proveedor.update', $proveedor->id], 'method' => 'PUT']) !!}

          <div class="form-group">
            {!! Form::label('id', 'ID', ['class' => 'control-label']) !!}
            {!! Form::text('id', null, ['class' => 'form-control', 'maxlength' => 20, 'readonly' => '']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('tipo_documento_id', 'TIPO DOCUMENTO', ['class' => 'control-label']) !!}
            {!! Form::select('tipo_documento_id', $tipo_documentos, null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('razon_social', 'RAZON SOCIAL', ['class' => 'control-label']) !!}
            {!! Form::text('razon_social', null, ['class' => 'form-control', 'maxlength' => 100]) !!}
          </div>
        
          {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
        

        {!! Form::close() !!}
      </div>
    </div>
</div>

@endsection
