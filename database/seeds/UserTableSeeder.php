<?php

use Illuminate\Database\Seeder;
use GottaShit\Entities\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 19)->create();
        factory(User::class, 'admin')->create();
    }
}
