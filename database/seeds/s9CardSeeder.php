<?php

use Illuminate\Database\Seeder;

class s9CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'シロナの覇気 (s9 114/100)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS9%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%B9%E3%82%BF%E3%83%BC%E3%83%90%E3%83%BC%E3%82%B9/%E3%82%B7%E3%83%AD%E3%83%8A%E3%81%AE%E8%A6%87%E6%B0%97(s9-114-100).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'リザードン (s9 103/100)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS9%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%B9%E3%82%BF%E3%83%BC%E3%83%90%E3%83%BC%E3%82%B9/%E3%83%AA%E3%82%B6%E3%83%BC%E3%83%89%E3%83%B3V(s9-103-100).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

