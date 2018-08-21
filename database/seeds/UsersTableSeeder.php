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
        $user->name ='Administrador';
        $user->email = 'admin@admin.cl';
        $user->password = bcrypt('admin123');
        $user->type = 'admin';
        $user->save();


        $user = new User();
        $user->name ='Felipe Pezo';
        $user->email = 'felipe@admin.cl';
        $user->password = bcrypt('admin123');
        $user->type = 'admin';
        $user->save();

    }
}
