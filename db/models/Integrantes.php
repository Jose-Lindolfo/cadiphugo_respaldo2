<?php 
namespace Models;
use Models\Sector;
use \Illuminate\Database\Eloquent\Model;
 
class Integrantes extends Model {
	public $timestamps = false;
    protected $table = 'integrantes_clap';
	protected $primaryKey = 'id';
    protected $fillable = ['sector_id','zona_id','tipo_c','cedula','e_cadip','nombre_a','telefono','jefe_carga','cod_bodega','tipo_b','rif_b','razon_social','municipio','parroquia','tipo_r','cedula_r','responsable','telefono_r','eliminar'];
    //Ejemplo de definir campos

	public function sector()
	{
		return $this->belongsTo(Sector::class, 'sector_id', 'id');
	}
}