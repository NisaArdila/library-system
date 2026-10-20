<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Novel',
            'Fiksi Fantasi',
            'Novel Romantis',
            'Novel Sejarah',
            'Pengembangan Diri',
            'Biografi',
            'Buku Masak',
            'Buku Anak-anak',
            'Buku Sains',
            'Buku Agama',
        ];

        foreach ($names as $name) {
            Category::firstOrCreate([
                'name' => $name,
            ]);
        }
    }
}
