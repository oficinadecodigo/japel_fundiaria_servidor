@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Pesquisa usuários
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("usuario")!!}/create'>
            <button class = 'btn red' type = 'submit'>Cadastrar usuário</button>
        </form>
    </div>
    <table>
        <thead>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Login</th>
            <th>Administrador</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario) 
            <tr>
                <td>{!!$usuario->nome!!}</td>
                <td>{!!$usuario->cpf!!}</td>
                <td>{!!$usuario->email!!}</td>
                <td>{!!$usuario->login!!}</td>
                <td>{!!$usuario->administrador!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/usuario/{!!$usuario->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/usuario/{!!$usuario->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/usuario/{!!$usuario->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $usuarios->render() !!}

</div>
@endsection