@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Adicionar Autor</div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('autor_store') }}">
                        @csrf
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ex">Data de Nascimento</label>
                        <input type="date" name="data_de_nasc" id="data_de_nasc" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
                @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
            </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
