<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazifeladatok extends Model
{
    use HasFactory;

    protected $fillable = ['tanulo', 'beadott_feladat', 'link'];
    
    protected $visible = [
        'id',
        'tanulo',
        'beadott_feladat',
        'link',
        'szoveges_ertekeles',
        'pont',
    ];

}
