<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAuthor extends Model
{
    use HasFactory;

    protected $table="authors";

    protected $fillable = [
        
        'name',
        'date',
        'country',
        'history',
        'occupation'
    ];

    //Método de relacionamento um pra um
    public function relUsers(){

        return $this->hasMany('App\Models\ModelBook', 'id_author');
    }
}
