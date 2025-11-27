<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    //Relation with Users
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user');
    }
}
