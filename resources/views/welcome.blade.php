@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Sistema de Registro de Facturas LTDA</h1>
                <p>Proyecto Desarrollado UBB Taller de Desarrollo</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('/login') }}">Ingresar</a>
            </div>
        </div>
    </header>
@endsection

@section('js')
    {!! Html::script('js/jquery-easing/jquery.easing.min.js') !!}
    {!! Html::script('js/scrollreveal/scrollreveal.min.js') !!}
    {!! Html::script('js/magnific-popup/jquery.magnific-popup.min.js')!!}
    {!! Html::script('js/creative.min.js') !!}
    {!! Html::script('js/sb-admin.min.js') !!}

@endsection

@section('css')
    {!! Html::style('css/jquery-easing/jquery.easing.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    {!! Html::style('css/creative.min.css') !!}
    {!! Html::style('css/sb-admin.min.css') !!}
@endsection
