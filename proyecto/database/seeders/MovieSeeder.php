<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vamos a cargar unos registros en la tabla, con ayuda de la clase
        // DB de Laravel.
        DB::table('movies')->insert([
            [
                // El id es autoincremental, pero me gusta ponerlo.
                'movie_id' => 1,
                'title' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'price' => 2099,
                'release_date' => '2001-12-12',
                'synopsis' => 'Unos amiguitos se van de paseo a tirar un anillo malo a un volcán.',
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at' => now(), // now() retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 2,
                'title' => 'El Discurso del Rey',
                'price' => 1699,
                'release_date' => '2015-04-09',
                'synopsis' => 'Un príncipe con problemas de tartamudez se transforma en rey y tiene que dar un importante discurso.',
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at' => now(), // now() retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 3,
                'title' => 'La Matrix',
                'price' => 1899,
                'release_date' => '1999-06-27',
                'synopsis' => 'Neo sigue al conejito blanco y se mete en flor de quilombo.',
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at' => now(), // now() retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
        ]);
    }
}
