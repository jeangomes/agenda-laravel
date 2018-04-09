@extends('layout')
@section('content')
    @include('contacts.form-search',['acao'=>'contact.index'])
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->telephone}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Ações <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="btn btn-primary btn-sm btn-block"
                                   href="{{ route('contact.show',$contact->id) }}"><span
                                            class="glyphicon glyphicon-list"></span> Visualizar</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="btn btn-warning btn-sm btn-block"
                                   href="{{ route('contact.edit',$contact->id) }}"><span
                                            class="glyphicon glyphicon-edit"></span> Editar</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
                                <button type="submit" style="display: inline;" class="btn btn-danger btn-sm btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Excluir
                                </button>
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    {{ $contacts->links() }}
@endsection