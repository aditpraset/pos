<?php

namespace Database\Seeders;

use App\Models\Uom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uoms = [
            [
                'name' => 'Pcs',
                'description' => 'Pieces',
            ],
            [
                'name' => 'Kg',
                'description' => 'Kilogram',
            ],
            [
                'name' => 'Ltr',
                'description' => 'Liter',
            ],
            [
                'name' => 'Box',
                'description' => 'Box',
            ],
             [
                'name' => 'Pack',
                'description' => 'Pack',
            ],
             [
                'name' => 'Can',
                'description' => 'Can',
            ],
             [
                'name' => 'Bottle',
                'description' => 'Bottle',
            ],
        ];

        foreach ($uoms as $uom) {
            Uom::create($uom);
        }
    }
}
