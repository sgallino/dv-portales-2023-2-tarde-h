<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Invocamos los Seeders que queremos que se ejecuten, en el orden
        // que necesitamos.
        // $this->call(\Database\Seeders\MovieSeeder::class);
        // Si el namespace de la clase es el mismo que el namespace de este
        // archivo, entonces lo podemos omitir.
        // Dicho de otra forma, cuando ponemos una clase sin su FQN,
        // por defecto se busca en el mismo namespace del archivo.
        $this->call(MovieSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
