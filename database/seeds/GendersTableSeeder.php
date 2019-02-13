<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('genders')->get()->count() == 0)
        {
            DB::table('genders')->insert(array(
                [
                    'text' => 'male',
                ],
                [
                    'text' => 'female',
                ],
            ));
        }
        else
        {
            echo "\nError ! there are genders to test\n";
        }

    }
}
