@extends('layouts.app')

@section('title','LISTA DE ASIGNACIONES')

@section('content')

    <div class="container">
        <h1>Lista de Usuarios</h1>
        <div>

            <!-- Large modal -->
            <button href="{{route('users.create')}}" type="button" class="btn btn-success" data-toggle="modal"
                    data-target=".bs-example-modal-lg">Crear Usuario
            </button>
            <a class="btn btn-primary " href="./home">Home</a>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    </div>
                </div>
            </div>


            <table class="table table-responsive table-bordered">

                <tr>
                    <th>ID USUARIO</th>
                    <th>Nombre Usuario</th>
                    <th>Email</th>
                    <th>Tipo Usuario</th>
                    <th>Accion</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->type =='admin')
                                <span class="label label-danger">{{$user->type}}</span>
                            @else
                                <span class="label label-primary">{{$user->type}}</span>
                            @endif
                        </td>
                        <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>
                            <a href="{{route('users.destroy',$user->id)}}"
                               onclick="return confirm('Desea eliminar ese Usuario ')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
    {{$users->render()}}



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>


@endsection