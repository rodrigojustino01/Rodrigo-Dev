<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosModel extends Model {
    protected $table = 'produtos';
    protected $fillable = ['product_name', 'product_value_total', 'product_value_unitario', 'product_quantidade' ];   
}
