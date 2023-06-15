<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sales_date' => $this->faker->date(),
            'page' => $this->faker->sentence(),
            'csr_name' => $this->faker->name(),
            'customer_name' => $this->faker->name(),
            'number' => $this->faker->randomDigit(),
            'address_landmark' => $this->faker->city(),
            'main_item' => $this->faker->sentence(),
            'sku_1' => $this->faker->randomDigit(),
            'sku_2' => $this->faker->randomDigit(),
            'sku_3' => $this->faker->randomDigit(),
            'sku_4' => $this->faker->randomDigit(),
            'upseller' => $this->faker->name(),
            'upsell_item' => $this->faker->sentence(),
            'price' => $this->faker->randomDigit(),
            'upsell_price' => $this->faker->randomDigit(),
            'final_price' => $this->faker->randomDigit(),
            'notes' => $this->faker->paragraph(3),
            'call_text_status' => $this->faker->sentence(),
            'shipper' => $this->faker->sentence(),
            'courier' => $this->faker->sentence(),
            'status' => $this->faker->sentence(),
            'tracking_number' => $this->faker->randomDigit(),
            'pos' => $this->faker->sentence(),
            'rts_tracking_number' => $this->faker->randomDigit(),
        ];
    }
}
