<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
                'grade' => 'PSA10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('grades')->insert([
                'grade' => '傷なし',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('grades')->insert([
                'grade' => '傷あり',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
