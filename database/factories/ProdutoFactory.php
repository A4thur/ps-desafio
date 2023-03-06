<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'descricao' => fake()->text(100),
            'quantidade' => fake()->randomDigit(),
            'preco' => fake()->randomNumber(2, 0, 30),
            'imagem' => fake()->imageUrl(640, 480),
            'categoria_id' => fake()->numberBetween(1, 10)
            /* método alternativo
            'categoria_id' => function () {
                return Categoria::inRandomOrder()->first()->id();
            },
            */
        ];
    }
}
