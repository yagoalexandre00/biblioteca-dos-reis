@extends('layout.main')
@section('title', 'Dashboard')
@section('content')

    <div class="page-header">
        @if (auth()->user()->is_admin == '1')
            <h1>Painel de Controle</h1>
        @else
            <h1>Minhas Reservas</h1>
        @endif
    </div>


    <div class="dashboard-books-table">
        @if (count($livros) === 0)
            <p>Aparentemente você não possui nenhuma reserva.</p>
        @else
            <p>Abaixo você poderá checar as suas reservas e os seus respectivos prazos de retorno.</p>
            <table class="table table-hover">
                <thead>
                    <th scope="col">Nº de Registro</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Devolução</th>
                    <th scope="col">Ver mais</th>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($livros); $i++)
                        <tr>
                            <th scope="row">{{ $livros[$i]->registration_number }}</th>
                            <td>{{ $livros[$i]->title }}</td>
                            <td>{{ $livros[$i]->author }}</td>
                            <td> {{ $reserva[$i]->situation }} </td>
                            <td> {{ date_format(new DateTime($reserva[$i]->return_date), 'd/m/Y') }}</td>
                            <td style="text-align: center"><a href="/livros/{{ $livros[$i]->id }}"><i
                                        class="fa-regular fa-eye"></i></a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @endif
    </div>

@endsection
