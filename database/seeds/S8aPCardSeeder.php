<?php

use Illuminate\Database\Seeder;

class S8aPCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'ピカチュウ (s8a-G 001/015)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS8a-P%5D+%E3%83%97%E3%83%AD%E3%83%A2%E3%82%AB%E3%83%BC%E3%83%89%E3%83%91%E3%83%83%E3%82%AF+25th+ANNIVERSARY+edition/%E3%83%94%E3%82%AB%E3%83%81%E3%83%A5%E3%82%A6(S8a-G-001-015).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'ブラッキー (s8a-P 012/025)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS8a-P%5D+%E3%83%97%E3%83%AD%E3%83%A2%E3%82%AB%E3%83%BC%E3%83%89%E3%83%91%E3%83%83%E3%82%AF+25th+ANNIVERSARY+edition/%E3%83%96%E3%83%A9%E3%83%83%E3%82%AD%E3%83%BC(S8a-P-012-025).png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'マリィのプライド (s1 419/414)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS8a-P%5D+%E3%83%97%E3%83%AD%E3%83%A2%E3%82%AB%E3%83%BC%E3%83%89%E3%83%91%E3%83%83%E3%82%AF+25th+ANNIVERSARY+edition/%E3%83%9E%E3%83%AA%E3%82%A3%E3%81%AE%E3%83%97%E3%83%A9%E3%82%A4%E3%83%89(S1-419-414).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'リザードン (s8a-P 001/025)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS8a-P%5D+%E3%83%97%E3%83%AD%E3%83%A2%E3%82%AB%E3%83%BC%E3%83%89%E3%83%91%E3%83%83%E3%82%AF+25th+ANNIVERSARY+edition/%E3%83%AA%E3%82%B6%E3%83%BC%E3%83%89%E3%83%B3(S8a-P-001-025).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

