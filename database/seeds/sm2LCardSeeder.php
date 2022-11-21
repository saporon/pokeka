<?php

use Illuminate\Database\Seeder;

class sm2LCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'マオ (sm2L 055/050)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM2L%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%A2%E3%83%AD%E3%83%BC%E3%83%A9%E3%81%AE%E6%9C%88%E5%85%89/%E3%83%9E%E3%82%AA(sm2L-055-050).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'アセロラ (sm2+ 056/049)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM2%2B%5D+%E5%BC%B7%E5%8C%96%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E6%96%B0%E3%81%9F%E3%81%AA%E3%82%8B%E8%A9%A6%E7%B7%B4%E3%81%AE%E5%90%91%E3%81%93%E3%81%86/%E3%82%A2%E3%82%BB%E3%83%AD%E3%83%A9(sm2%2B056-049).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

