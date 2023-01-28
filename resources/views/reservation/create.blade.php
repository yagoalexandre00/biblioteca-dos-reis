@extends('layout.main')
@section('title', 'Realizar reserva de ' . $livro->title)
@section('content')

    <div class="page-header row">
        <div class="col-8">
            <h1>Reserva de livro</h1>
            <p>Olá, senhor(a) {{ $usuario->name }}! Vimos que você possui interesse em alugar o livro
                {{ $livro->title }} de {{ $livro->author }}.
            </p>
            <form class="confirmation-book-reservation" action="/livros/reserva" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="books_id" value="{{ $livro->id }}">
                    <label for="date">Escolha a data de retorno:</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-secondary">Confirmar</button>
            </form>
        </div>
        <div class="col-4 reservation-book-container">
            <img id="reservation-book-image"
                src="/img/{{ $livro->image ? 'books/' . $livro->image : 'default-book-image.jpg' }}"
                alt="{{ $livro->title }}">
        </div>
    </div>

@endsection
