<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $sucursal_id
 * @property int $farmacia_id
 * @property string $nombre
 * @property string $direccion
 * @property Farmacia $farmacia
 */
class Sucursal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sucursal';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sucursal_id';

    /**
     * @var array
     */
    protected $fillable = ['farmacia_id', 'nombre', 'direccion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'farmacia_id', 'farmacia_id');
    }
}
