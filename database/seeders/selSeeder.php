<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\selFactory;
use Database\Factories\elementFactory;
use App\Models\Sel;
use App\Models\Element;

class selSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sel::factory()->count(6)
        ->has(Element::factory()->count(1))
        ->create();  
    }
}
