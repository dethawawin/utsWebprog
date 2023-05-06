<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name'=> 'Mr. Vico Lamar',
                'loyalty' => 'Gold',
            ],
            [
                'name' => 'Ms. Fei Fei Li',
                'loyalty' => 'Green'
            ]
            ]);
    }
}
