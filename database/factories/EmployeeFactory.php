<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "role" => rand(1,3),
            "email" => $this->faker->email(),
            "phone" => $this->faker->phoneNumber(),
            "dob" => $this->faker->date(),
            "nrc" => $this->faker->colorName(),
            "address" => $this->faker->address(),
            "diocese_id" => rand(1,9),
            "ethnicity_id" => rand(1,9),
            "father" => $this->faker->firstNameMale(),
            "mother" => $this->faker->firstNameFemale(),
            "parish_id" => rand(1,50),
            "position_1" => rand(1,6),
            "position_2" => rand(1,6),
            "department_id" => rand(1,9),
            "spouse" => $this->faker->name(),
            "childrens" => $this->faker->name(),
            "education" => $this->faker->text(),
            "user_id" => rand(1,9),
            
        ];
    }
}
