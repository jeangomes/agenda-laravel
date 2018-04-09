<div class="form-group">
    {!! Form::label('name','Nome',array('class'=>'control-label')) !!}
    {!! Form::text('name',null,['class'=>'form-control','required'=>true]) !!}
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('telephone','Telefone',array('class'=>'control-label')) !!}
        {!! Form::text('telephone',null,['class'=>'form-control','required'=>true,
        'placeholder'=>'(99) 99999-9999']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('email','E-mail',array('class'=>'control-label')) !!}
        {!! Form::email('email',null,['class'=>'form-control','required'=>true]) !!}
    </div>
</div>