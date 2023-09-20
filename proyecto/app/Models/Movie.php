<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Si seguimos las convenciones de Laravel, ya con esto podemos obtener todos los datos de la tabla de películas.
// Las conveciones a las que nos referimos tienen que ver con los nombres de las tablas y las PKs.
// Las tablas deberían estar siempre en minúsculas, snake_case, en inglés y plural.
// Por su lado, los modelos que se corresponden a las tablas deberían estar en StudlyCase/PascalCase, en inglés
// y singular.
// Esto es importante porque Laravel usa el nombre de la clase para buscar la tabla que le corresponde.
// Esto lo hace aplicando las transformaciones al nombre que mencionamos. Por ejemplo:
// Movie => movies
// MovieRating => movies_ratings
// Clasificacion => clasificacions
// Con respecto a la PK, Laravel espera que siempre sea una columna INT llamada "id".
// Si cualquiera de estas dos convenciones no se cumple, entonces tenemos que aclarárselo a Laravel directamente,
// como vemos más abajo.
/**
 * App\Models\Movie
 *
 * @property int $movie_id
 * @property string $title
 * @property int $price
 * @property string $release_date
 * @property string $synopsis
 * @property string|null $cover
 * @property string|null $cover_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCoverDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereSynopsis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Movie extends Model
{
    // use HasFactory;

    // Si queremos personalizar la tabla, entonces tenemos que crear esta propiedad $table.
    protected $table = "movies";

    // Si queremos personalizar la PK, entonces tenemos que crear la propiedad $primaryKey.
    protected $primaryKey = "movie_id";

    protected $fillable = ['title', 'price', 'release_date', 'synopsis', 'cover', 'cover_description'];
}
