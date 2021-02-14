<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;

    protected $table="book";

    protected $fillable = [

        'id_user',
        'id_author',
        'title',
        'pages',
        'price'
    ];

    //Método de relacionamento um pra um
    public function relUsers(){

        return $this->HasOne('App\Models\User', 'id', 'id_user');
        
    }
    public function relAuthor(){

        return $this->HasOne('App\Models\ModelAuthor', 'id', 'id_author');
    
    }
}
