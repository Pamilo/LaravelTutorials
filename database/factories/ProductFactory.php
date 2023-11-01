<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    class ProductFactory extends Factory{
        public function definition(): array{
        return ['name' => $this->faker->company,
                'price' => $this->faker->numberBetween($min = 200, $max = 9000),];
        } //parametros para la creacion en seeder de forma aleatoria
}