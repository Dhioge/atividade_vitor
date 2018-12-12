@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Livro</div>
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
                <form role="form" method="POST" action="{{ route('livro_store') }}">
                        @csrf
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" value="{{ $livro->autor_id }}">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlSelect2">Autor</label>
                            <select  id="autor_id" name="autor_id" required>
                                    @foreach ($autor as $item)

                                    <option value="{{ $item->id }}"  @if ($item->id = $livro->autor_id) selected @endif>{{ $item->nome }}</option>
                                    @endforeach

                            </select>
                          </div>
                    <div class="form-group">
                        <label for="ex">Quantidade</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $livro->quantidade }}">
                    </div>
                    <div class="form-group">
                        <label for="ex">Preço</label>
                        <input type="number" name="preco" id="preco" class="form-control" value="{{ $livro->preco }}">
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
