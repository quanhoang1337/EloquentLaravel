<?php

namespace Database\Seeders;

use App\Models\Nhasanxuat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NhasanxuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nhasanxuat::create(['ten' => 'Cong ty 1', 'logo' => 'logo1.jpg', 'status' => 1]);
        Nhasanxuat::create(['ten' => 'Cong ty 2', 'logo' => 'logo2.jpg', 'status' => 1]);
        Nhasanxuat::create(['ten' => 'Cong ty 3', 'logo' => 'logo3.jpg', 'status' => 0]);
    }
}
