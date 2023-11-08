<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taskUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'task_id',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}