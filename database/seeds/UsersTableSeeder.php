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
       $visitor = User::create([
       	'name' => 'Bairon', 
       	'email' => 'bairon.bernal@inxaitcorp.com', 
       	'identification' => '1233907408',
       	'date_origin' => date('YY-MM-DD'),
       	'model_car' => 'Trailblazer',
       )];

       
    }
}
