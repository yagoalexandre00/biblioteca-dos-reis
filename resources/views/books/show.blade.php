@extends('layout.main')
@section('title', $livro->title)
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-4" id="img-container">
                {{-- imagem da capa --}}
                <img src="https://m.media-amazon.com/images/I/41Uu2qnzEgL.jpg" alt="">
            </div>
            <div class="col-md-4" id="info-container">
                <h1 class="book-title">{{ $livro->title }}</h1>
                <p class="book-author"><i class="fa-solid fa-pen"></i> {{ $livro->author }}</p>
                <p class="book-genre"><i class="fa-solid fa-comments"></i> {{ $livro->genre }}</p>
                <p class="book-registration-number"><i class="fa-solid fa-lightbulb"></i> {{ $livro->registration_number }}
                </p>
            </div>
        </div>
        <div class="row">
            <p class="book-synopsis"><i class="fa-solid fa-info"></i> {{ $livro->synopsis }}</p>
        </div>
    </div>
@endsection
