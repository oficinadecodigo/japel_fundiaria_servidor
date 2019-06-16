@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Informações do usuário
    </h1>
    <form method = 'get' action = '{!!url("usuario")!!}'>
        <button class = 'btn blue'>Pesquisa usuários</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Campo</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>Nome : </i></b>
                </td>
                <td>{!!$usuario->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>CPF : </i></b>
                </td>
                <td>{!!$usuario->cpf!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Email : </i></b>
                </td>
                <td>{!!$usuario->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Login : </i></b>
                </td>
                <td>{!!$usuario->login!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Senha : </i></b>
                </td>
                <td>{!!$usuario->senha!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Administrador : </i></b>
                </td>
                <td>{!!$usuario->administrador!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection