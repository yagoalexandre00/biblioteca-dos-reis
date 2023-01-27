<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Book;

class ReservationController extends Controller
{
    public function create($id)
    {
        $user = auth()->user();
        $book = Book::findOrFail($id);
        return view('reservation.create', ['usuario' => $user, 'livro' => $book]);
    }

    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation->users_id = auth()->user()->id;
        $reservation->books_id = $request->books_id;
        $reservation->return_date = $request->date;

        if ($reservation->save()) {
            Book::where('id', $request->books_id)
                ->update(['situation' => 'Emprestado']);
            return redirect('/dashboard')->with('msg', 'Sua reserva foi realizada com sucesso!');
        }

        return redirect('/livros')->with('msg', 'Algo de inesperado aconteceu. Por favor, entre em contato com os administradores.');
    }
}
