<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {

        Admin::create([
            'name' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
