@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biblioteca</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><a href="{{ route('livro_create') }}" class="btn btn-primary"> Cadastre Seu livro Aqui!</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
