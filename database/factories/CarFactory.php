<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomImages =[
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.caricarz.com%2Fnew-cars%2Fnissan%2Fnissan-terra&psig=AOvVaw0b2fmYJpycyP-96U4niQT_&ust=1699621348036000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNi__4f9toIDFQAAAAAdAAAAABAY',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fgeelyautoiraq.com%2Fcoolray%2F&psig=AOvVaw3dCYOhUe3Mca8zoIFZs69P&ust=1699621307298000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLjP1fT8toIDFQAAAAAdAAAAABAE',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.isuzuphil.com%2Fvehicles%2Fd-max&psig=AOvVaw2R2mKJpbynkwhorWtHVRxt&ust=1699621265572000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNCOoeL8toIDFQAAAAAdAAAAABAE',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngmart.com%2Fimage%2F461177&psig=AOvVaw2BKZB2gfeL_NGffw59Pyui&ust=1699621188306000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNCLlL38toIDFQAAAAAdAAAAABAd',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bmwgroup.com%2Fen%2Fbrands-and-services%2Fbmw%2Fbmwi.html&psig=AOvVaw19ZVYcw6uPIpJnw4DhHZQf&ust=1699621082185000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIj8uYv8toIDFQAAAAAdAAAAABAE',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.unitedmotors.lk%2Fpersonal%2Fsuvs%2Fmitsubishi%2Fmontero-sport&psig=AOvVaw2nsgcs5PPALHJdPTcJVSru&ust=1699620999668000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOjFleL7toIDFQAAAAAdAAAAABAE',

       ];
        return [
            'title' => fake()->name(),
            'description' => fake()->sentence(5),
            'thumbnail' => $randomImages[rand(0, 5)],
            'price' => fake()->numberBetween(100000, 480000)

        ];
    }
}
