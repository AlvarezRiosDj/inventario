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
          
        {!! Form::open(['route' => 'banco.store']) !!}

          <div class="form-group">
            {!! Form::label('id', 'ID', ['class' => 'control-label']) !!}
            {!! Form::text('id', null, ['class' => 'form-control', 'maxlength' => 3, 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('nombre', 'NOMBRE', ['class' => 'control-label']) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
          </div>
        
          {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
        

        {!! Form::close() !!}
      </div>
    </div>
</div>

@endsection
