<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        /**
         * DB::table('users')->insert([
         *    'name' => str_random(10),
         *    'email' => str_random(10) . '@gmail.com',
         *    'password' => bcrypt('secret'),
         *    'avatar' => 'public/images/avatars/default.jpg',
         *    'phone' => mt_rand(0000000001, 9999999999),
         *]);
         */
    }
}
