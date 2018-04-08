@extends('layout')
@section('content')
    {!! Form::model($contact,['route' => ['contact.update',$contact->id],'class'=>'form-horizontal']) !!}
    <input type="hidden" name="_method" value="PUT">
    @include('contacts.form')
    <div class="text-center">
        {{ Form::submit('Salvar',['class'=>'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection