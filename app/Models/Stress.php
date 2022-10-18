<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Stress extends Model
{
    use HasFactory;
    protected $table = 'stress';
    protected $guarded = [];
    
    public function get_stress_test_users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
