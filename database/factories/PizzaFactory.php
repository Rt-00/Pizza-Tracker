<?php

namespace Database\Factories;

use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
            "Pepperoni",
            "Sausage",
            "Mushrooms",
            "Onions",
            "Green Peppers",
            "Black Olives",
            "Extra Cheese",
            "Ham",
            "Bacon",
            "Pineapple",
            "Spinach",
            "Garlic",
            "Jalapeños",
            "Tomatoes",
            "Basil",
            "Chicken",
            "Anchovies",
            "Artichoke Hearts",
            "Sun-dried Tomatoes",
            "Red Onions",
        ];

        $toppings = [];

        for ($i = 1; $i <= rand(1, 4); $i++) {
            $toppings[] = Arr::random($toppingChoices);
        }

        $toppings = array_unique($toppings);

        return [
            'id' => rand(111111, 999999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready']),
        ];
    }
}
