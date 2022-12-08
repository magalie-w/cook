<?php

namespace Database\Factories;

use App\Models\Recette;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecetteFactory extends Factory
{
    protected $model = Recette::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre' => fake() ->name(),
            'preparation' => fake() ->paragraph(),
            'visible' => fake() ->boolean(),
        ];
    }
}
