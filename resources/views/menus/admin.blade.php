@extends('layouts.app')

@section('content')


    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('/home')}}">Home<span style="font-size:16px;"
                                                                            class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
                    </li>
                    <!--Menu de Usuarios -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{route('users.index')}}">Lista de Usuarios</a></li>
                        </ul>
                    </li>

                    <!--Menu de Proveedores-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proveedores <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{route('proveedores.index')}}">Listar de Proveedores</a></li>
                        </ul>
                    </li>

                    <!--Menu de Facturas -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facturas <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{route('facturas.index')}}">Lista de Facturas</a></li>
                        </ul>
                    </li>
                    <!--Menu de Obras -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Obras <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{route('obras.index')}}">Lista de Obras</a></li>
                        </ul>
                    </li>
                     <!--Menu de asignacion -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar asignación<span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{url('asignaciones')}}">Por facturas</a></li>
                            <li><a href="{{url('AsignacionesObra')}}">Por obras</a></li>
                        </ul>
                    </li>
                    <!--Menu de Materiales-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Materiales <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{route('material.index')}}">Lista de Materiales</a></li>

                        </ul>
                    </li>
                    <!--Menu de Resumen -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imprimir Informe <span
                                    class="caret"></span><span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-print"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="{{url('reportes')}}">Listado de Informes</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endsection
@yield('admin')



 
