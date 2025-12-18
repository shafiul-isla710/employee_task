<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'completed_by'
    ];

    //Relation with Users
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user')
            ->withPivot('assigned_at', 'completed_at')
            ->withTimestamps();
    }

    //Relation with Comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function priority()
    {
        return [
            'low',
            'medium',
            'high'
        ];
    }
}
