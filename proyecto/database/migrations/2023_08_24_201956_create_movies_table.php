<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Todas las migrations tienen 2 métodos:
// up(): Ejecuta las instrucciones para lograr el cambio que queremos en la base de datos.
// down(): Ejecuta las instrucciones inversas para deshacer el cambio que hicimos en el up().
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Para manejar las tablas de la base de datos, tenemos la clase Schema de Laravel.
        // Esta clase tiene métodos útiles crear/editar/eliminar tablas.
        // Por ejemplo, el método Schema::create() permite crear una tabla, recibiendo 2 parámetros:
        // 1. String. El nombre de la tabla que queremos crear.
        // 2. Callable. La función que ejecuta las instrucciones para crear la tabla. Esta función suele recibir como argumento
        // una instancia de Blueprint.
        Schema::create('movies', function (Blueprint $table) {
            // Blueprint ("plano de construcción" en inglés) es la clase que permite configurar y modificar una tabla.
            // Tiene múltiples métodos para agregar todo tipo de columnas, relaciones, índices, etc.

            // Para nuestra tabla de películas, vamos a crear los siguientes campos:
            // - movie_id       PK BIGINT UNSIGNED AUTO_INCREMENT
            // - title          VARCHAR(100)
            // - price          INT UNSIGNED (en centavos)
            // - release_date   DATE
            // - synopsis       TEXT
            // - cover          VARCHAR(255)
            // - cover_description  VARCHAR(255)

            // El método id() crea una columna PK de tipo BIGINT UNSIGNED y AUTO_INCREMENT. El nombre por defecto de la columna es
            // 'id', pero lo podemos personalizar pasando un parámetro.
            $table->id('movie_id');
            // string crea una campo VARCHAR(). Por defecto, los crea con una longitud de 255 (configurable con el segundo parámetro)
            $table->string('title', 100);
            $table->unsignedInteger('price');
            $table->date('release_date');
            $table->text('synopsis');
            // Si queremos que un campo acepte el valor null, solamente debemos encadenar una llamada al método nullable().
            $table->string('cover')->nullable();
            $table->string('cover_description')->nullable();

            // El método timestamps crea dos columnas de tipo TIMESTAMP:
            // - created_at
            // - updated_at
            // La idea es que se utilice el primero para guardar la fecha de creación de un registro, y el segundo para la fecha de 
            // última actualización.
            // Si usamos Eloquent (como vamos a ver en próximas clases), estos campos de manejan automáticamente.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
