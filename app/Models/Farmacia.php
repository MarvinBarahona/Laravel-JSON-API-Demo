<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $farmacia_id
 * @property string $razon_social
 * @property string $nombre_comercial
 * @property Sucursal[] $sucursals
 */
class Farmacia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'farmacia';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'farmacia_id';

    /**
     * @var array
     */
    protected $fillable = ['razon_social', 'nombre_comercial'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sucursals()
    {
        return $this->hasMany('App\Models\Sucursal', 'farmacia_id', 'farmacia_id');
    }
}
