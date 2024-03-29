<?php

namespace App\Model;

use App\Utils\Constantes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SesionCliente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sesiones_cliente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id','kangoo_id','evento_id', 'reservado_hasta', 'fecha_inicio', 'fecha_fin'
    ];

    /**
     * Transforms dates to carbon
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'fecha_inicio', 'fecha_fin'];

    public function scopeEntrenamientosAgendados($query, $tipoUsuario){
        switch ($tipoUsuario){
            case Constantes::ROL_CLIENTE:
                 return $query->join('eventos', 'sesiones_cliente.evento_id', 'eventos.id')
                     ->leftJoin('kangoos', 'sesiones_cliente.kangoo_id', 'kangoos.id')
                     ->where('sesiones_cliente.fecha_inicio', '>=', today())
                     ->select('sesiones_cliente.id','sesiones_cliente.fecha_inicio','sesiones_cliente.fecha_fin', 'eventos.lugar',
                                'eventos.nombre', 'kangoos.SKU');
            case Constantes::ROL_ENTRENADOR:
                //TODO
        }
        return null;
    }

    public function client(){
        return $this->belongsTo(Cliente::class,'cliente_id', 'usuario_id');
    }

    public function kangoo(){
        return $this->hasOne(Kangoo::class,'id', 'kangoo_id');
    }

}
