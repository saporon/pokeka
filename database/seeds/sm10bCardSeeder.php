<?php

use Illuminate\Database\Seeder;

class sm10bCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'ファイヤー&サンダー&フリーザーGX (sm10b 060/054)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM10b%5D+%E5%BC%B7%E5%8C%96%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%82%B9%E3%82%AB%E3%82%A4%E3%83%AC%E3%82%B8%E3%82%A7%E3%83%B3%E3%83%89/%E3%83%95%E3%82%A1%E3%82%A4%E3%83%A4%E3%83%BC%26%E3%82%B5%E3%83%B3%E3%83%80%E3%83%BC%26%E3%83%95%E3%83%AA%E3%83%BC%E3%82%B6%E3%83%BCGX(sm10b-060-054).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'レシラム&リザードンGX (sm10 097/095)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BSM10%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%83%80%E3%83%96%E3%83%AB%E3%83%96%E3%83%AC%E3%82%A4%E3%82%BA/%E3%83%AC%E3%82%B7%E3%83%A9%E3%83%A0%26%E3%83%AA%E3%82%B6%E3%83%BC%E3%83%89%E3%83%B3GX(sm10-097-095).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

