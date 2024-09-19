<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//import à faire manuellement sinon il y aura confusion entre BelongsTo de Eloquent\Relations et celui que l'ordinateur
//va chercher aléatoirement dans le même dossier
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Book extends Model
{
    use HasFactory;

    /*
    Cela permet de résoudre le problème de "Mass assignment" error en précisant les colonnes d'une table, que l'on autorise à remplir 
    pour créer un tuple (une ligne).
    */
    protected $fillable = [
        'title',
        'user_id',
    ];
    
    //pcq on appartient à un seul user
    public function user():BelongsTo {
        /*
        on précise le modèle utilisé, ici, "User"
        Cela permet d'être en raccord avec la migration
        */
        return $this->belongsTo(User::class);
    }
}
