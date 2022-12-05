<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $quarded = false;

/*     protected $fillable = [
        'name',
        'email',
        'password',
    ]; */

    /* public function progress(){
        return $this->belongsTo(Progress::class);
    } */
}
