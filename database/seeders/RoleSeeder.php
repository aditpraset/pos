<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Administrator with full access',
            ],
            [
                'name' => 'Cashier',
                'slug' => 'cashier',
                'description' => 'Cashier with access to POS and Sales',
            ],
            [
                'name' => 'Owner',
                'slug' => 'owner',
                'description' => 'Owner with access to Reports and Dashboard',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
