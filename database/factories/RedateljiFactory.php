<?php

namespace Database\Factories;

use App\Models\Redatelji;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Redatelji>
 */
class RedateljiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Redatelji::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'ime' => $this->faker->randomElement(['James', 'John', 'Robert', 'Michael', 'David', 'Richard', 'Joseph', 
                'Thomas', 'Daniel', 'Matthew', 'Anthony', 'Donald', 'Steven', 'Mary', 'Jennifer', 'Lisa', 'Jessica', 'Kimberly']),
            'prezime' => $this->faker->randomElement(['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 
                'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson']),
            'datum_rodenja' => $this->faker->date($format = 'y-m-d', $max = 'now'),
            'drzava' => $this->faker->randomElement(['SAD', 'KIN', 'IND', 'BRA', 'JAP', 'NJE', 'RUS', 'IND', 'UK', 'MEX', 'FRA', 'ITA', 
                'TUR', 'JUG', 'KOR', 'CAN', 'SPA', 'SAU', 'AUS', 'ARG', 'POL']),
        ];
    }
}
