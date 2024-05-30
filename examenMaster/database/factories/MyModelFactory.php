<?php

namespace Database\Factories;

use App\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
