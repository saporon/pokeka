<?php

use Illuminate\Database\Seeder;

class s11CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'おじょうさま (s11 114/100)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%83%AD%E3%82%B9%E3%83%88%E3%82%A2%E3%83%93%E3%82%B9/%E3%81%8A%E3%81%98%E3%82%87%E3%81%86%E3%81%95%E3%81%BE(s11-114-100).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'ギラティナV (s11 111/100)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%83%AD%E3%82%B9%E3%83%88%E3%82%A2%E3%83%93%E3%82%B9/%E3%82%AE%E3%83%A9%E3%83%86%E3%82%A3%E3%83%8AV(s11-111-100).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'プテラV (s11 106/100)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%5BS11%5D+%E6%8B%A1%E5%BC%B5%E3%83%91%E3%83%83%E3%82%AF+%E3%83%AD%E3%82%B9%E3%83%88%E3%82%A2%E3%83%93%E3%82%B9/%E3%83%97%E3%83%86%E3%83%A9V(s11-106-100).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}