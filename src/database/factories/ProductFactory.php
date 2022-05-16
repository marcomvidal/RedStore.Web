<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        $productName = $this->faker->productName;

        return [
            'name' => $this->formattedName($productName),
            'sku' => $this->formattedSku($productName),
            'description' => $this->faker->sentence(5, false),
            'price' => $this->faker->randomFloat(2, 0, 1000)
        ];
    }

    private function formattedName($productName)
    {
        $productName = ucfirst($productName);

        return "{$this->faker->colorName} {$productName}";
    }

    private function formattedSku($productName)
    {
        $prefix = strtoupper(
            substr(
                preg_replace("/[^a-zA-Z]+/", '', $productName), 0, 3
            )
        );

        return "{$prefix}{$this->faker->randomNumber(5)}";
    }
}
