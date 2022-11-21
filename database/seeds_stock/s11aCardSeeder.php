<?php

use Illuminate\Database\Seeder;

class s11aCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'ふりそで (s11a 082/068)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11a%5D+%E5%BC%B7%E5%8C%96%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E7%99%BD%E7%86%B1%E3%81%AE%E3%82%A2%E3%83%AB%E3%82%AB%E3%83%8A/%E3%81%B5%E3%82%8A%E3%81%9D%E3%81%A7(s11a-082-068).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'セレナ (s11a 081/068)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11a%5D+%E5%BC%B7%E5%8C%96%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E7%99%BD%E7%86%B1%E3%81%AE%E3%82%A2%E3%83%AB%E3%82%AB%E3%83%8A/%E3%82%BB%E3%83%AC%E3%83%8A(s11a-081-068).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'ジャローダV (s11a 084/068)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11a%5D+%E5%BC%B7%E5%8C%96%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E7%99%BD%E7%86%B1%E3%81%AE%E3%82%A2%E3%83%AB%E3%82%AB%E3%83%8A/%E3%82%B8%E3%83%A3%E3%83%AD%E3%83%BC%E3%83%80V(s11a-084-068).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
