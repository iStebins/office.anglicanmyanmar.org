<?php

namespace Database\Factories;

use App\Models\Parish;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParishFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parish::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "slug" => $this->faker->userName(),
            "email" => $this->faker->email(),
            "phone" => $this->faker->phoneNumber(),
            "service_time" => $this->faker->time(),
            "address" => $this->faker->address(),
            "diocese_id" => rand(1,9),
            "congeregation" => rand(50,500),
            "weekely_attendance" => rand(15,250),
            "dedication" => $this->faker->date(),
            "user_id" => rand(1,9),
        ];
    }
}
