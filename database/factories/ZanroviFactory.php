<?php

namespace Database\Factories;

use App\Models\Zanrovi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zanrovi>
 */
class ZanroviFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Zanrovi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement(['Akcija', 'Avantura', 'Komedija', 'Krimi', 'Drama', 'Fantazija', 'Horor', 'Misterija', 
                'Romantika', 'Naučna fantastika', 'Triler', 'Western']),
            'popularnost' => $this->faker->randomFloat(1, 0, 5.0),
            'glumci' => $this->faker->randomNumber(1,150),
        ];
    }
}
