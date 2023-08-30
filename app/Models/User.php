<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

  protected $table="users";
protected $primaryKey = 'user_id';
protected $hidden = ['password'];
 protected $fillable = [

'admin_id',
'created_at',
'updated_at',
'email',
'user_id',
'name',
'password',
'user_pic',
 'user_room'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // User.php

  public function orders()
    {
        return $this->hasMany(Order::class, 'user_id'); // 'user_id' is the foreign key column
    }


}
