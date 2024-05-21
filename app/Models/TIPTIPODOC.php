<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TIPTIPODOC
 *
 * @property $TIP_ID
 * @property $TIP_NOMBRE
 * @property $TIP_PREFIJO
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TIPTIPODOC extends Model
{
    protected $table = 'TIP_TIPO_DOC';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['TIP_ID', 'TIP_NOMBRE', 'TIP_PREFIJO'];


}
