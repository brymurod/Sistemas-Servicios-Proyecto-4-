<?php

namespace GreenMarket;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
	protected $table = "product";

    protected $fillable = ['name,categoria,descripcion,unidad_venta,precio'];	
}
