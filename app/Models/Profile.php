<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasFactory;
    protected $table = 'profile_user';

    protected $fillable = [
        'user_id',
        'province',
        'gender',
        'bio',
        'facebook'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
