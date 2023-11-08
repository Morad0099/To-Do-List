<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task_user extends Model
{
    use HasFactory;
    protected $table = 'task_user';
    protected $fillable = [
        'user_id',
        'task_id',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }
}
