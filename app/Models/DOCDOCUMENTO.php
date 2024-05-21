<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DOCDOCUMENTO
 *
 * @property $DOC_ID
 * @property $DOC_NOMBRE
 * @property $DOC_CODIGO
 * @property $DOC_CONTENIDO
 * @property $DOC_ID_TIPO
 * @property $DOC_ID_PROCESO
 * @property $created_at
 * @property $updated_at
 *
 * @property ProProceso $proProceso
 * @property TipTipoDoc $tipTipoDoc
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DOCDOCUMENTO extends Model
{
    protected $table = 'DOC_DOCUMENTO';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['DOC_ID', 'DOC_NOMBRE', 'DOC_CODIGO', 'DOC_CONTENIDO', 'DOC_ID_TIPO', 'DOC_ID_PROCESO'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proProceso()
    {
        return $this->belongsTo(\App\Models\ProProceso::class, 'DOC_ID_PROCESO', 'PRO_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipTipoDoc()
    {
        return $this->belongsTo(\App\Models\TipTipoDoc::class, 'DOC_ID_TIPO', 'TIP_ID');
    }
    
}
