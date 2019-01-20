<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Group extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'user_id', 'instituition_id',];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Instituition()
    {
        return $this->belongsTo(Instituition::class);
    }

    public function user()
    {
        // RELACIONAMENTO N:N
        return $this->belongsToMany(User::class, 'user_groups');
    }
}