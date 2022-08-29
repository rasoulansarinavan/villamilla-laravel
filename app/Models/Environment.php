<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->hasMany(Category::class,'environment_id');
    }
}
