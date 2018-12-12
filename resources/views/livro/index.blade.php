@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Livro</div>

                    <div class="card-body">
                        <a href="{{ route('livro_create') }}" class="btn btn-success">Adicionar</a>
                        <div class="card mb-3">
                                <div class="card-header">
                                <div class="card-body">
                                <div class="table-responsive">
                                    @if (session('msg'))
                                    <div class="alert alert-success">
                                        {{ session('msg') }}
                                    </div>
                                    @endif
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Nome</th>
                                        <th>Autor</th>
                                        <th>Quantidade</th>
                                        <th>Preço</th>
                                        <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($livro as $item)
                                        <tr>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->nome_autor }}</td>
                                        <td>{{ $item->quantidade }}</td>
                                        <td>{{ $item->preco }}</td>
                                        <td>
                                            <a href="{{ url('livro/edit/'.$item->id)}}" class="btn btn-warning">Editar</a>
                                            <a href="{{ url('livro/edit/'.$item->id)}}" class="btn btn-danger">Excluir</a>
                                            <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    {{ $livro->links() }}
                                </div>
                                </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
