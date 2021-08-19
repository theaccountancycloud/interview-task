<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'name' => 'Shops', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Recreation', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Bank', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Transfer', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Fees', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Restaurants', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Flights', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Booking', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Subscription', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Furniture', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Digital Purchase', 'created_at' => now(), 'updated_at' => now() ]
        ]);

        DB::table('transaction_categories')->insert([
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Camden Bike Shop')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Shops')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Camden Bike Shop')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Recreation')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'INTEREST PAYMENT')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Bank')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'INTEREST PAYMENT')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Transfer')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Credit Card 2222')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Bank')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Credit Card 2222')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Fees')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Burger Shop Ltd')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Restaurants')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Outdoor Leisure Ltd')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Recreation')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Airlines Worldwide Booking')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Flights')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Airlines Worldwide Booking')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Booking')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'TV LICENSE MAY')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Subscription')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'TV LICENSE MAY')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Furniture')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'From AC/55244727VIA MOBILE')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Bank')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'From AC/55244727VIA MOBILE')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Transfer')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Audible')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Shops')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'TV LICENSE MAY')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Digital Purchase')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'Cafe Riva')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Shops')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'transaction_id'    => DB::table('transactions')->where('name', 'TV LICENSE MAY')->first()->id,
                'category_id'       => DB::table('categories')->where('name', 'Restaurants')->first()->id,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
        ]);
    }
}
