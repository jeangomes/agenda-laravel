{!! Form::open(['route' => $acao??'contact.index','method' => 'get','class'=>'form-horizontal','autocomplete'=>'off']) !!}
<fieldset>
    <input type="hidden" name="pesquisar" value="1">
    <div class="form-group">
        {!! Form::label('name','Nome',array('class'=>'control-label')) !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('telephone','Telefone',array('class'=>'control-label')) !!}
            {!! Form::text('telephone',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('email','E-mail',array('class'=>'control-label')) !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
    </div>
</fieldset>
<div class="text-center">
    {{ Form::submit('Buscar',['class'=>'btn btn-info']) }}
</div>
{!! Form::close() !!}