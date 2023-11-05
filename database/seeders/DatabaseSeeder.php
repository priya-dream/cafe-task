<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('clients')->insert([
            'fname'=>'Mathu',
            'lname'=>'Yadhav',
            'dob'=>'1997-03-02',
            'image'=>'mathu.png',
            'gender'=>'Female',
            'contact'=>774358041,
            'street_no'=>'mmmm',
            'street_address'=>'aaaa',
            'city'=>'Kilinochi',
            'email'=>'mathu@gmail.com',
            'status' =>'Active'
        ]);
    }
}
