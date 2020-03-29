<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(App\Admin::class, 6)->create();
        $user = $users[0];
        $user->name ='admin';
        $user->nickname ='haotian';
        $user->save();
    }
}
