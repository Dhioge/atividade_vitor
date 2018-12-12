@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de validação foi enviado para seu email.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, verifique seu email um link de validação foi enviado!') }}
                    {{ __('Se vocẽ não recebeu um link,') }}, <a href="{{ route('verification.resend') }}">{{ __('click Aqui para reenviar') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
