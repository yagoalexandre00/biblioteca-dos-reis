<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Book;
use Datetime;

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
        $currentDate = new DateTime();
        $returnDate = new Datetime($request->date);
        if ($returnDate < $currentDate) {
            return redirect('/livros/reserva/' . $reservation->books_id)->with('msg-error', 'Você não pode realizar uma reserva para uma data passada.');
        }

        $reservation->return_date = $request->date;

        if ($reservation->save()) {
            Book::where('id', $request->books_id)
                ->update(['situation' => 'Emprestado']);
            return redirect('/dashboard')->with('msg-success', 'Sua reserva foi realizada com sucesso!');
        }

        return redirect('/livros')->with('msg-error', 'Algo de inesperado aconteceu. Por favor, entre em contato com os administradores.');
    }

    public function dashboard()
    {
        $user = auth()->user();
        $reservations = Reservation::where('users_id', $user->id)->get();

        $books = [];
        foreach ($reservations as $reservation) {
            $books[] = Book::findOrFail($reservation->books_id);
        }


        return view('dashboard', ['livros' => $books, 'reserva' => $reservations]);
    }
}
