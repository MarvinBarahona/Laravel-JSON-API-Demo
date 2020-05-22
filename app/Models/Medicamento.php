<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $medicamento_id
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 */
class Medicamento extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicamento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'medicamento_id';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];

}
