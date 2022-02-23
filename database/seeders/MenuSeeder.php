<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_menu' => 'Kopi Luwak',
                'harga' => 2000,
                'deskripsi' => 'Kopi tai luwak',
                'ketersediaan' => 10,
            ],
            [
                'nama_menu' => 'Kopi Arabican',
                'harga' => 50000,
                'deskripsi' => 'Kopi asal arab',
                'ketersediaan' => 10,
            ],
        ];

        Menu::insert($data);
    }
}
