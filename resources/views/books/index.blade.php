@extends('layout.main')
@section('title', 'Livros')
@section('content')

    <div class="page-header">
        <h1>Livros</h1>
        <p>Abaixo, veja os livros disponíveis para serem alugados.</p>
    </div>


    <div class="books-table">
        @if (count($livros) == 0)
        <p>Aparentemente não existem livros cadastrados. Clique no botão abaixo para cadastrar.</p>
        <a class="btn btn-primary">Cadastrar</a>
        @endif
    </div>
@endsection
