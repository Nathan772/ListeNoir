<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//import ajouté par nathan
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //crée une phrase aléatoire pour les fausses données qd on a besoin de fausses données
            'title' => $this->faker->sentence,

            //si on créé un livre seul, il va y avoir un user greffé, qui utilise la factory
            'user_id' => User::factory(),


            //
        ];
    }
}
