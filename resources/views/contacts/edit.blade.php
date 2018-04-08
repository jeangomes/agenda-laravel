@extends('layouts.admin_template')
@section('content')
    {!! Form::model($area,['route' => ['area.update',$area->id],'class'=>'form-horizontal']) !!}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            {{ Form::bsText('nome',null,['required'=>true]) }}
        </div>    
        <div class="form-group">
            {{ Form::bsSelect('coordenador',$pessoas,null,['required'=>true]) }}            
        </div>    
        {{ Form::bsSubmit('Salvar') }}
    {!! Form::close() !!}
@endsection