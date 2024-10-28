<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'nama_siswa' => $this->faker->name,
            'kelas' => $this->faker->randomElement(['1A', '1B', '2A', '2B', '3A', '3B']),
            'umur' => $this->faker->numberBetween(6, 18),
            'nama_orangtua' => $this->faker->name,
            'nomor_hp' => $this->faker->phoneNumber,
            'package_id' => Package::inRandomOrder()->first()->id, // Assuming you have a Package model and factory
        ];
    }
}
