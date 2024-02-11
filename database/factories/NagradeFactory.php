<?php

namespace Database\Factories;

use App\Models\Nagrade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nagrade>
 */
class NagradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Nagrade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement(['Oscar', 'Zlatni globus', 'SAG nagrada', 'Cannes Film Festival', 'Zlatni lav', 
                'Zlatni medvjed', 'Cesar', 'Srebrni medvjed', 'Zlatni leopard']),
            'godina' => $this->faker->date($format = 'y', $max = 'now'),
            'kategorija' => $this->faker->randomElement(['Najbolji film', 'Najbolji glumac', 'Najbolja glumica', 'Najbolji redatelj', 
                'Najbolji scenarij', 'Najbolja fotografija', 'Najbolji kostim', 'Najbolji vizualni efekti', 'Najbolji zvuk', 'Najbolja montaža']),
            'film' => $this->faker->randomNumber(1,250),
        ];
    }
}


