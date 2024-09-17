<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //pcq on appartient à un seul user
    public function user():BelongsTo {
        /*
        
        on précise le modèle utilisé, ici, "User"
        Cela permet d'être en raccord avec la migration
        */
        return $this->belongsTo(User::class);
    }
}
