<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'm_testimonial_sekolah';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'position',
        'comments'
    ];
}
