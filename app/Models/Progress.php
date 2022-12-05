<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $quarded = false;

    /* public function user()
    {
        return $this->hasMany(User::class);
    } */
}
