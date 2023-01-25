@extends('layout.main')
@section('title', 'Livros')
@section('content')

    <div class="page-header">
        <h1>Livros</h1>
    </div>


    <div class="books-table">
        @if (count($livros) == 0)
            <p>Aparentemente não existem livros cadastrados. Clique no botão abaixo para adicionar.</p>
        @else
            <p>Abaixo veja os livros disponíveis para serem alugados.</p>
            <table class="table table-hover">
                <thead>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nº de Registro</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Ver mais</th>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                        <tr>
                            {{-- <th scope="row">{{ $livro->id }}</th> --}}
                            <th scope="row"> {{ $livro->registration_number }} </td>
                            <td> {{ $livro->title }} </td>
                            <td> {{ $livro->author }} </td>
                            <td> {{ $livro->genre }} </td>
                            <td> {{ $livro->situation }} </td>
                            <td> <a href="/livros/{{ $livro->id }}"><i class="fa-regular fa-eye"></i></a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a class="btn btn-primary" href="/livros/criar">Adicionar</a>
    </div>
@endsection
