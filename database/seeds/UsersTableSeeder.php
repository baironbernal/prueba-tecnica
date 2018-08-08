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
       $user = User::create([
          'name' => 'bfbernalgo',
          'email' => 'baironbernal@hotmail.com',
          'password' => bcrypt(env('PASSWORD')),
          'identification' => '1233907408',
          'date_origin' => date('YY-MM-DD'),
          'model_car' => 'Trailblazer',
            
        ]);

        $user->assignRole('admin');
    }
}
