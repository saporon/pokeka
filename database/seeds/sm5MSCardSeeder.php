<?php

use Illuminate\Database\Seeder;

class sm5MSCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'ナタネ (sm5S 070/066)',
                'value_ave_grade1' => 0,
                'value_ave_grade2' => 0,
                'value_ave_grade3' => 0,
                'value_max_grade1' => 0,
                'value_max_grade2' => 0,
                'value_max_grade3' => 0,
                'value_min_grade1' => 0,
                'value_min_grade2' => 0,
                'value_min_grade3' => 0,
                'difference_grade1' => 0,
                'difference_grade2' => 0,
                'difference_grade3' => 0,
                'difference_per_grade1' => 0,
                'difference_per_grade2' => 0,
                'difference_per_grade3' => 0,
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM5S%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%A6%E3%83%AB%E3%83%88%E3%83%A9%E3%82%B5%E3%83%B3/%E3%83%8A%E3%82%BF%E3%83%8D(sm5S-070-066).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'シロナ (sm5M 070/066)',
                'value_ave_grade1' => 0,
                'value_ave_grade2' => 0,
                'value_ave_grade3' => 0,
                'value_max_grade1' => 0,
                'value_max_grade2' => 0,
                'value_max_grade3' => 0,
                'value_min_grade1' => 0,
                'value_min_grade2' => 0,
                'value_min_grade3' => 0,
                'difference_grade1' => 0,
                'difference_grade2' => 0,
                'difference_grade3' => 0,
                'difference_per_grade1' => 0,
                'difference_per_grade2' => 0,
                'difference_per_grade3' => 0,
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM5M%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%A6%E3%83%AB%E3%83%88%E3%83%A9%E3%83%A0%E3%83%BC%E3%83%B3/%E3%82%B7%E3%83%AD%E3%83%8A(sm5M-070-066).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

