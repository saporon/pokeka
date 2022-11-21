<?php

use Illuminate\Database\Seeder;

class s12CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
                'name' => 'アンノーンV (s12 103/098)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%E3%82%A2%E3%83%B3%E3%83%8E%E3%83%BC%E3%83%B3V(s12-103-098).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'スズナ (s12 113/098)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%E3%82%B9%E3%82%BA%E3%83%8A(s12-113-098).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'ルギアV STAR (s12 123/098)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%E3%83%AB%E3%82%AE%E3%82%A2V+STAR(s12-123-098).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'ルギアV (s12 110/098)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%E3%83%AB%E3%82%AE%E3%82%A2V(s12-110-098).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('cards')->insert([
                'name' => 'レジドラゴV (s12 108/098)',
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
                'image' => 'https://pokeka.s3.ap-northeast-1.amazonaws.com/%E3%83%AC%E3%82%B8%E3%83%89%E3%83%A9%E3%82%B4V(s12-108-098).jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
