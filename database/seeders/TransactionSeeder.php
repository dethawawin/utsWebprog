<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('transactions')->insert([
            [
                'user_id' => 1,
                'coffee_id' =>5,
                'transaction_date' => '2023-03-19'
            ],
            [
                'user_id' => 1,
                'coffee_id' =>6,
                'transaction_date' => '2023-03-20'
            ],
            [
                'user_id' => 1,
                'coffee_id' =>3,
                'transaction_date' => '2023-03-21'
            ],

            [
                'user_id' => 2,
                'coffee_id' =>8,
                'transaction_date' => '2023-03-18'
            ],
            [
                'user_id' => 2,
                'coffee_id' =>1,
                'transaction_date' => '2023-03-19'
            ],
            [
                'user_id' => 2,
                'coffee_id' =>2,
                'transaction_date' => '2023-03-21'
            ]
        ]);
    }
}
