<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomImages =[
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shareicon.net%2Fuser-manager-profile-avatar-job-social-profession-professions-and-jobs-822726&psig=AOvVaw2zVqeWXI8BIe2oY7VY5qUn&ust=1699625640647000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKCH-oaNt4IDFQAAAAAdAAAAABAZ',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shareicon.net%2Fuser-profile-avatar-job-social-businessman-profession-professions-and-jobs-822711&psig=AOvVaw2zVqeWXI8BIe2oY7VY5qUn&ust=1699625640647000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKCH-oaNt4IDFQAAAAAdAAAAABAR',

       ];
        return [
            'name' => fake()->name(),
            'position' => fake()->jobTitle(),
            'pic' => $randomImages[rand(0, 1)],
            'follower' => fake()->numberBetween(1000, 9000),
            'following' => fake()->numberBetween(100, 700),
            'post' => fake()->numberBetween(10, 50),

        ];
    }
}
