<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'luui';
        $user->email = 'luui321@gmail.com';
        $user->password = bcrypt('luui321');
        $user->save();
    }
}
