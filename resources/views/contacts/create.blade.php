@extends('layout')
@section('content')
    @include('errors')
    <br>
    {!! Form::open(['route' => 'contact.store','class'=>'form-horizontal']) !!}
    @include('contacts.form')
    <div class="text-center">
        {{ Form::submit('Salvar',['class'=>'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection