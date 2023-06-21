<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShortener extends Model
{
    protected $table = 'url_shortener';

    protected $fillable = ['original_url', 'short_url', 'alias_url','clicks','expire_date','token_id'];

    public static function obtenerTodos()
    {
        return self::all();
    }

    public static function obtenerPorId($id)
    {
        return self::find($id);
    }

    public static function crear($datos)
    {
        return self::create($datos);
    }

    public function actualizar($datos)
    {
        return $this->update($datos);
    }

    public function eliminar()
    {
        return $this->delete();
    }
}
