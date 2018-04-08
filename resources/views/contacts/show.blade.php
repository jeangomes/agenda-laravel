@extends('layouts.admin_template')    
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <dl>
                <dt>Tipo </dt>
                <dd>{{$area->tipo}}</dd>
                <dt>Coordenação </dt>
                <dd>{{$area->coordenacao}}</dd>
                <dt>Descrição da atividade </dt>
                <dd>{{$area->descricao_atividade}}</dd>
                <dt>Missão </dt>
                <dd>{{$area->missao}}</dd>
                <dt>Objetivos </dt>
                <dd>{{$area->objetivos}}</dd>
                <dt>Visão de Futuro </dt>
                <dd>{{$area->visao_futuro}}</dd>
                <dt>Análise do Ambiente </dt>
                <dd>{{$area->analise_ambiente}}</dd>
                <dt>Estratégias </dt>
                <dd>{{$area->estrategias}}</dd>
            </dl>
        </div>
    </div>
@endsection