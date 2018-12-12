@extends('layouts.app')
@section('menu')
<li class='nav-link '><a href="{{ route('autor') }}"></a> Autor</li>
<li class='nav-link '><a href="{{ route('livro') }}"></a> Livro</li>
@endsection
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
