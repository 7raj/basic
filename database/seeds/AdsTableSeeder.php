<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ad::class, 20)->create();
        /**
         *DB::table('ads')->insert([
         *   'title' => str_random(10),
         *   'slug' => str_random(10) . '@gmail.com',
         *   'body' => bcrypt('secret'),
         *   'status' => 'default.jpg',
         *]);
         */
    }
}
