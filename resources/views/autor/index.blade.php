@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Autor</div>

                    <div class="card-body">
                        <a href="{{ route('autor_create') }}" class="btn btn-success">Adicionar</a>
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
                                        <th>Data de Nascimento</th>
                                        <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($autor as $item)
                                        <tr>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->data_de_nasc }}</td>
                                        <td>
                                                <a href="{{ url('autor/edit/'.$item->id)}}" class="btn btn-warning">Editar</a>
                                                <form action="{{ route('autor_delete') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id_delete" value="{{ $item->id }}">
                                                  <button  class="btn btn-danger" onClick='confirm("Deseja realmente Excluir?")'>Excluir</button>
                                                </form>
                                                </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    {{ $autor->links() }}
                                </div>
                                </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
