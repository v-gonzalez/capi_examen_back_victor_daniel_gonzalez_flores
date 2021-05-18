<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDomicilio extends Model
{
    use HasFactory;

    protected $table = 'user_domicilios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad'
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
