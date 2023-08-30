<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
protected $table="products";
protected $primaryKey = 'product_id';

 protected $fillable = [

                'product_name',
                 'category_id',
                  'Admin_id',
               'product_price',
                'product_availability',
                'product_picture',
                 'updated_at',
                  'created_at'
    ];

public function orderedProducts()
{
    return $this->hasMany(OrderedProduct::class);
}

}
