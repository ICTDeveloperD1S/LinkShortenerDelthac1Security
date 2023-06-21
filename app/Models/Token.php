<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'tokens';

    protected $fillable = ['user_id', 'token', 'expire_date'];

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
