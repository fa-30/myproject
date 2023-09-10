<?php

namespace Database\Factories;
use App\Models\Clint;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user=Clint::inRandomOrder()->first();
        if(!$user)
        {
           $user=Clint::factory()->create();
        }
        return [
            'price'=>fake()->numberBetween(100,1000),
            'clint_id'=>$user->id
        ];
    }
}
