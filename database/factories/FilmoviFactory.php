<?php

namespace Database\Factories;

use App\Models\Filmovi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filmovi>
 */
class FilmoviFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Filmovi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'naslov' => $this->faker->randomElement(['The Shawshank Redemption', 'The Godfather', 'The Dark Knight', 'Pulp Fiction',
                'The Lord of the Rings', 'Harry Potter', 'Fight Club', 'Forrest Gump', 'Inception', 'The Matrix', 'Goodfellas',
                'The Silence of the Lambs', 'The Green Mile', 'The Godfather: Part II', 'Se7en', 'The Usual Suspects', 
                'Leon: The Professional', 'The Lion King', 'Gladiator', 'The Departed']),
            'godina' => $this->faker->date($format = 'y-m-d', $max = 'now'),
            'ocjena' => $this->faker->randomFloat(1, 0, 5.0),
            'trajanje' => $this->faker->time(),
            'zanr' => $this->faker->randomNumber(1,150),
            'redatelj' => $this->faker->randomNumber(1,150),
        ];
    }
}
