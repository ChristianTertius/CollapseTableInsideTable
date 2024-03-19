<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $typeMentah = ['Bola Besar', 'Bola Kecil'];
        $type = fake()->randomElement($typeMentah);

        $hobbyMentah = ['Masak', 'Music', 'Running', 'Gym', 'Badminton', 'Watching Film'];
        $hobby = fake()->randomElement($hobbyMentah);

        // $nameMentah = ['Bulutangkis', 'Renang', 'Berkuda', 'Billiard', 'Catur', 'Memanah'];
        // $name = fake()->randomElement($nameMentah);
        
        $educationMentah = ['SMA', 'KULIAH'];
        $education = fake()->randomElement($educationMentah);
        return [
            'name' => fake()->firstNameFemale,
            'user_id' => mt_rand(1,10),
            'address' => fake()->address,
            'age' => mt_rand(20, 25),
            'education' => $education,
            'hobby' => $hobby
        ];
    }
}
