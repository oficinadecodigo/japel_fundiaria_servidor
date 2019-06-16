@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirme se email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de redefinição foi enviado para seu email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique um link de confirmaçao no seu email.') }}
                    {{ __('Se não recebeu o email') }}, <a href="{{ route('verification.resend') }}">{{ __('Clique aqui para solicitar outro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
