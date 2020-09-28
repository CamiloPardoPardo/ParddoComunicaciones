<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $fillable =['Referencia','Marca','Producto','Inversion_Total','Cantidad','Precio_Final','Descripcion','img'];
}
