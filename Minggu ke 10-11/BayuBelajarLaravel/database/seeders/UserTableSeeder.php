<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::insert([
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => bcrypt(12345678),
      	]);
    }
}
