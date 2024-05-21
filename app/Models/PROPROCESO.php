<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PROPROCESO
 *
 * @property $PRO_ID
 * @property $PRO_NOMBRE
 * @property $PRO_PREFIJO
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PROPROCESO extends Model
{
    protected $table = 'PRO_PROCESO';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['PRO_ID', 'PRO_NOMBRE', 'PRO_PREFIJO'];


}
