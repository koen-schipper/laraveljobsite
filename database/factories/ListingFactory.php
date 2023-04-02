<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'tags' => 'Backend, MySQL, Laravel',
            'company' => fake()->company(),
            'location' => fake()->city() . ', ' . fake()->stateAbbr(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'contract' => 'Full Time',
            'min_salary' => 3000,
            'max_salary' => 5000,
            'hours' => '33 till 40 hours',
            'education' => "Master's Degree",
            'category' => 'Other',
            'description' => fake()->paragraphs(3, true)
        ];
    }
}
