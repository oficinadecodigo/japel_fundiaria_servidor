@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Pesquisa moradias
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("moradium")!!}/create'>
            <button class = 'btn red' type = 'submit'>Cadastrar</button>
        </form>
		<!--
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/japel_fundiaria_servidor/public/pessoa">Pessoa</a></li>
            <li><a href="http://localhost/japel_fundiaria_servidor/public/usuario">Usuario</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
		-->
	</div>
    <table>
        <thead>
		    <th>Proprietário</th>
            <th>Matrícula imóvel</th>
            <th>CEP</th>
            <th>UF</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Complemento</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($moradias as $moradium) 
            <tr>
                <td>{!!$moradium->pessoa->nome!!}</td>
                <td>{!!$moradium->matricula_imovel!!}</td>
                <td>{!!$moradium->cep!!}</td>
                <td>{!!$moradium->uf!!}</td>
                <td>{!!$moradium->cidade!!}</td>
                <td>{!!$moradium->bairro!!}</td>
                <td>{!!$moradium->endereco!!}</td>
                <td>{!!$moradium->numero!!}</td>
                <td>{!!$moradium->complemento!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/moradium/{!!$moradium->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/moradium/{!!$moradium->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/moradium/{!!$moradium->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $moradias->render() !!}

</div>
@endsection