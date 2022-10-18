<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Life extends Model
{
    use HasFactory;
    protected $table = 'lives';
    protected $guarded = [];

    public function get_life_test()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
