<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Generate a fake title
            'content' => $this->faker->paragraph, // Generate fake content
            'user_id' => \App\Models\User::factory(), // Associate a user
        ];
    }
}
