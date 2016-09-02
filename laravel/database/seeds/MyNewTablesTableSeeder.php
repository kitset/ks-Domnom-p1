<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MyNewTablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
		DB::table('my_new_tables')->truncate();

		DB::table('my_new_tables')->insert([
            'id'	=>	'MY nane', 
            'personal_data'	=>	'Hows it going', 
            ]);


        DB::table('my_new_tables')->insert([
            'id'	=>	'my age', 
            'personal_data'	=>	'its good', 
            ]);


        
    }
}