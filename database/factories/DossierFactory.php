<?php

namespace Database\Factories;

use App\Models\Dossier;
use Illuminate\Database\Eloquent\Factories\Factory;

class DossierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dossier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomClient' => $this->faker->lastName,
            'nomDossier' => $this->faker->name,
            'description' => $this->faker->text(100),
            'statut' => $this->faker->name,
            'termes' => $this->faker->name,
            'montant' => $this->faker->randomFloat(10000.50,10.05,10000.50),
            'adversaire' => $this->faker->name
        ];
       
    }
}
