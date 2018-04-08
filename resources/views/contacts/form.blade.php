<div class="form-group">
    {!! Form::label('name','Nome',array('class'=>'control-label')) !!}
    {!! Form::text('name',null,['class'=>'form-control','required'=>true]) !!}
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('telephone','Telefone',array('class'=>'control-label')) !!}
        {!! Form::text('telephone',null,['class'=>'form-control','required'=>true,
        'placeholder'=>'(99) 99999-9999',
        'pattern'=>'\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('email','E-mail',array('class'=>'control-label')) !!}
        {!! Form::email('email',null,['class'=>'form-control','required'=>true]) !!}
    </div>
</div>