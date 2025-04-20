<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

//create in order to use Factory to write test case
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'pricing' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->paragraph,
            'images' => json_encode([$this->faker->imageUrl()]),
            'category_id' => Category::factory(),
        ];
    }
}
