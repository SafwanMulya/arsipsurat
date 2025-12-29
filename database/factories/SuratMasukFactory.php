<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kategori_id' => Kategori::factory(),
            'judul' => fake()->word(),
            'nomor_surat' => fake()->word(),
            'tanggal_surat' => fake()->date(),
            'asal_surat' => fake()->word(),
            'perihal' => fake()->text(),
            'file_surat' => fake()->word(),
            'keterangan' => fake()->text(),
        ];
    }
}
