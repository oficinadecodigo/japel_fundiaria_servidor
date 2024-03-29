@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastros</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
				<div class="card-body">
                    <a href="usuario">Cadastro usuários</a>
                </div>
				<div class="card-body">
                    <a href="pessoa">Cadastro pessoas</a>
                </div>
				<div class="card-body">
                    <a href="moradium">Cadastro moradias</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
