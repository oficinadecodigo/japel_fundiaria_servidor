@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Pesquisa pessoas
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("pessoa")!!}/create'>
            <button class = 'btn red' type = 'submit'>Cadastrar</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/japel_fundiaria_servidor/public/usuario">Usuario</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associar usuário<i class="mdi-navigation-arrow-drop-down right"></i></a>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="http://localhost/japel_fundiaria_servidor/public/pessoa">Pessoa</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown1">Associar pessoa<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>			
            <th>Tipo</th>
			<th>Data nascimento</th>
            <th>Nome mae</th>
            <th>Nome pai</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa) 
            <tr>
                <td>{!!$pessoa->nome!!}</td>
                <td>{!!$pessoa->cpf!!}</td>
                <td>{!!$pessoa->rg!!}</td>				
                <td>{!!$pessoa->tipo!!}</td>
                <td>{!!$pessoa->data_nascimento!!}</td>
                <td>{!!$pessoa->nome_mae!!}</td>
                <td>{!!$pessoa->nome_pai!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/pessoa/{!!$pessoa->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/pessoa/{!!$pessoa->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/pessoa/{!!$pessoa->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $pessoas->render() !!}

</div>
@endsection