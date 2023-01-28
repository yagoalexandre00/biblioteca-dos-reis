<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Storage;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booksTitle = array('O Pequeno Príncipe', 'A Odisseia', 'Laravel Para Ninjas', 'Harry Potter E O Cálice de Fogo', 'Só A Gente Sabe O Que Sente', 'Quem É Você, Alasca?');
        $booksAuthor = array('Antoine de Saint-Exupéry', 'Homero', 'Ademir C. Gabardo', 'J. K. Rowling', 'Fred Elboni', 'John Green');
        $booksGenre = array('Fábula', 'Épico', 'Técnico', 'Fantasia', 'Poemas', 'Romance');
        $booksRegistrationNumber = array(87234, 84573, 92831, 17462, 31929, 84763);
        // $booksImage = array(
        //     public_path('a-odisseia.jpg'),
        //     public_path('hp-e-o-calice-de-fogo.jpg'),
        //     public_path('laravel-para-ninjas.jpg'),
        //     public_path('o-pequeno-principe.jpg'),
        //     public_path('quem-e-vc-alasca.jpg'),
        //     public_path('so-a-gnt-sabe-oq-sente.png'),
        // );

        $bookSynopis = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus augue nec ante vulputate fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam laoreet massa nisl, et sagittis metus sagittis at. Curabitur id ipsum ac orci maximus gravida vitae ac mi. Sed consectetur, nulla vel sodales tempor, lorem augue maximus nunc, eget imperdiet ligula quam vitae metus. Vestibulum in metus est. Morbi vel lacus est. ";

        for ($i = 0; $i < count($booksTitle); $i++) {
            DB::table('books')->insert([
                'title' => $booksTitle[$i],
                'author' => $booksAuthor[$i],
                'genre' => $booksGenre[$i],
                'registration_number' => $booksRegistrationNumber[$i],
                // 'image' => $booksImage[$i],
                'synopsis' => $bookSynopis
            ]);
        }

    }
}
