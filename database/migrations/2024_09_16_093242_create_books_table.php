<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * this methods create the tab books
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            /*ajoute par défaut l'id de la ligne à ajouter à la base de données + le timestamps
            on peut les laisser ou pas, l'id il faut le laisser à priori vu que c'est indispensable pour toute bonne base
            */
            $table->id();

            /*créé un varchar

            */
            $table->string('title');
            /*clé étrangère id de l'utilisateur (dbut) */
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            /*clé étrangère id de l'utilisateur (fin) */
            //ou deuxième méthode pour la clé étrangère 
            $table->foreignIdFor(\App\Models\User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * this method delete the tab books
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
