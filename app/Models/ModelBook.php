<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;

    protected $table="book";

    protected $fillable = [
        'title',
        'id_user',
        'pages',
        'price'
    ];

    //Método de relacionamento um pra um
    public function relUsers(){

        return $this->HasOne('App\Models\User', 'id', 'id_user');
    }
}
