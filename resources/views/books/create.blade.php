@extends('layout.main')
@section('title', 'Adicionar Livro')
@section('content')

    <div class="page-header">
        <h1>Adicionar Livro</h1>
        <p>Insira abaixo as informações no formulário para cadastrar o livro no sistema.</p>
    </div>

    <div class="create-book-form">
        <form action="/livros" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título do Livro</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="genre">Gênero</label>
                <input type="text" name="genre" id="genre" class="form-control">
            </div>
            <div class="form-group">
                <label for="registration_number">Número de Registro</label>
                <input type="number" name="registration_number" id="registration_number" class="form-control"
                    max="99999" maxlength="5">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
