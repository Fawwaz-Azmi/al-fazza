<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_guru' => $this->faker->name(), // Nama guru diambil dari nama acak
            'body' => $this->faker->jobTitle(), // Judul diambil dari profesi acak
            'gambar' => $this->faker->imageUrl(640, 480, 'teachers', true), // URL gambar random
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
