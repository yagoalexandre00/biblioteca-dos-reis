@extends('layout.main')
@section('title', $livro->title)
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-4" id="img-container">
                {{-- imagem da capa --}}
                <img src="/img/books/{{ $livro->image }}" alt="{{ $livro->title }}">
            </div>
            <div class="col-md-8" id="info-container">
                <h1 class="book-title">{{ $livro->title }}</h1>
                <p class="book-author"><i class="fa-solid fa-pen"></i> {{ $livro->author }}</p>
                <p class="book-genre"><i class="fa-solid fa-comments"></i> {{ $livro->genre }}</p>
                <p class="book-situation"><i class="fa-solid fa-lightbulb"></i> {{ $livro->situation }}
                </p>
                <div class="button-book">
                    @if ($livro->situation == 'Disponível')
                        <button type="button" class="btn btn-secondary">Realizar reserva</button>
                    @else
                        <button type="button" class="btn btn-danger" disabled>Indisponível</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <p class="book-synopsis"><i class="fa-regular fa-circle-question"></i> {{ $livro->synopsis }}</p>
        </div>

    </div>
@endsection
