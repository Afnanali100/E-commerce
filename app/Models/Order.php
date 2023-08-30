<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
protected $table="orders";
protected $primaryKey = 'order_id';

 protected $fillable = [

                'admin_id',
                 'notes',
                  'order_date',
               'order_status',
                'room_no',
                'total',
                 'user_id',
                  'order_id'
    ];

public function orderedProducts()
{
    return $this->hasMany(OrderedProduct::class);
}
public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' is the foreign key column
    }

}
