@extends('layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    {!! Form::open(['route' => 'contact.store','class'=>'form-horizontal']) !!}
    @include('contacts.form')
    <div class="text-center">
        {{ Form::submit('Salvar',['class'=>'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection