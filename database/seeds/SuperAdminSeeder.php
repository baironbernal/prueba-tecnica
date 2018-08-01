<?php

use Illuminate\Database\Seeder;
use App\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'SuperAdmin',
        	'email' => 'superadmin@hotmail.com',
        	'password' => env('PASSWORD'),
        	'identification' => '1233907408',
        	'date_origin' => date('YY-MM-DD'),
        	'model_car' => 'Trailblazer',
        ]);

        $user->assignRole('super-admin');
    }
}
