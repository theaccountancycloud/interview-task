<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [ 'name' => 'Camden Bike Shop', 'amount' => -25, 'date' => '2021-08-18', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'INTEREST PAYMENT', 'amount' => 50, 'date' => '2020-09-12', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Credit Card 2222', 'amount' => -21, 'date' => '2021-02-01', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Burger Shop Ltd', 'amount' => -18.2, 'date' => '2021-04-15', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Outdoor Leisure Ltd', 'amount' => -56, 'date' => '2020-06-11', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Airlines Worldwide Booking', 'amount' => -225, 'date' => '2021-07-18', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'TV LICENSE MAY', 'amount' => -25, 'date' => '2021-05-01', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'From AC/55244727VIA MOBILE', 'amount' => 37.65, 'date' => '2021-02-24', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Audible', 'amount' => -7.99, 'date' => '2021-08-01', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Cafe Riva', 'amount' => -2.95, 'date' => '2021-08-06', 'created_at' => now(), 'updated_at' => now() ]
        ]);
    }
}
