<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(App\User::class, 30)->create();
        $user = $users[0];
        $user->name ='haotian';
        $user->email ='123456@qq.com';
        $user->nickname ='haotian';
        $user->save();
    }
}
