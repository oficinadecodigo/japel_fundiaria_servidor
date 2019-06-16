@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Cadastrar usuário
    </h1>
    <form method = 'get' action = '{!!url("usuario")!!}'>
        <button class = 'btn blue'>Pesquisa usuários</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("usuario")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="nome" name = "nome" type="text" class="validate">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
            <input id="cpf" name = "cpf" type="text" class="validate">
            <label for="cpf">CPF</label>
        </div>
        <div class="input-field col s6">
            <input id="email" name = "email" type="text" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
            <input id="login" name = "login" type="text" class="validate">
            <label for="login">Login</label>
        </div>
        <div class="input-field col s6">
            <input id="senha" name = "senha" type="text" class="validate">
            <label for="senha">Senha</label>
        </div>
        <div class="input-field col s6">
            <input id="administrador" name = "administrador" type="text" class="validate">
            <label for="administrador">Administrador</label>
        </div>
        <button class = 'btn red' type ='submit'>Cadastrar</button>
    </form>
</div>
@endsection