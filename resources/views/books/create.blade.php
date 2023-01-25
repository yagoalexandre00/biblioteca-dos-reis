@extends('layout.main')
@section('title', 'Adicionar Livro')
@section('content')

    <div class="page-header">
        <h1>Adicionar Livro</h1>
        <p>Insira abaixo as informações no formulário para cadastrar o livro no sistema.</p>
    </div>

    <div class="create-book-form">
        <form action="/livros" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Título completo da obra">
            </div>
            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" name="author" id="author" class="form-control"
                    placeholder="Nome completo do Autor">
            </div>
            <div class="form-group">
                <label for="genre">Gênero</label>
                <input type="text" name="genre" id="genre" class="form-control"
                    placeholder="Ex.: Terror, Ação, Aventura, Romance, etc">
            </div>
            <div class="form-group">
                <label for="synopsis">Sinopse</label>
                <textarea type="text" name="synopsis" id="synopsis" class="form-control" rows="2"
                    placeholder="Escreva uma breve sinopse do livro"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagem da capa</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="registration_number">Número de Registro</label>
                <input type="textarea" name="registration_number" id="registration_number" class="form-control"
                    onkeypress="return checkNumber(event);" maxlength="5" placeholder="Insira apenas números">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
