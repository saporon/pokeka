<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Card;
use App\Card_value;

class calucurateValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:calucurateValue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
     
    
    public function handle(Card $card)
    {
        foreach(Card::all() as $card_d) 
        {
            //平均、差額、変化率
            $card_ave_grade1 = $card_d->posts()
            ->where('grade_id',1)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->avg('value');
            if ($card_ave_grade1 != null){
                $value_ave = new Card_value;
                //平均値を更新
                $card_d->value_ave_grade1 = intval($card_ave_grade1);
                $card_d->save();
                //データベースに登録
                $value_ave->value_ave = intval($card_ave_grade1);
                $value_ave->grade_id = 1;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                //差額、変化率の計算
                $pre3_aves_grade1 = $card_d->card_values()->where('grade_id',1)->orderBy('id','DESC')->limit(4)->get();
                $ave_list = [];
                foreach($pre3_aves_grade1 as $ave_grade1){
                    array_push($ave_list, $ave_grade1->value_ave);
                }
                if(count($ave_list) ==4){
                    $card_d->difference_grade1 = $ave_list[0]-$ave_list[3];
                    $card_d->save();
                    $card_d->difference_per_grade1 = round(($card_d->difference_grade1)*100 / ($card_d->value_ave_grade1), 2);
                    $card_d->save();
                }else{
                    $card_d->difference_grade1 = 0;
                    $card_d->difference_per_grade1 = 0;
                    $card_d->save();
                }
            }else{
                //nullなら前回を値を引き継ぎ、データベースに登録
                $value_ave = new Card_value;
                $value_ave->value_ave = $card_d->value_ave_grade1;
                $value_ave->grade_id = 1;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                $card_d->difference_grade1 = 0;
                $card_d->difference_per_grade1 = 0;
                $card_d->save();
            }
            
            $card_ave_grade2 = $card_d->posts()
            ->where('grade_id',2)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->avg('value');
            if ($card_ave_grade2 != null){
                $value_ave = new Card_value;
                $card_d-> value_ave_grade2 = intval($card_ave_grade2);
                $card_d->save();
                $value_ave->value_ave = intval($card_ave_grade2);
                $value_ave->grade_id = 2;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                //差額、変化率の計算
                $pre3_aves_grade2 = $card_d->card_values()->where('grade_id',2)->orderBy('id','DESC')->limit(4)->get();
                $ave_list = [];
                foreach($pre3_aves_grade2 as $ave_grade2){
                    array_push($ave_list, $ave_grade2->value_ave);
                }
                if(count($ave_list) ===4){
                    $card_d->difference_grade2 = $ave_list[0]-$ave_list[3];
                    $card_d->save();
                    $card_d->difference_per_grade2 = round(($card_d->difference_grade2)*100 / ($card_d->value_ave_grade2), 2);
                    $card_d->save();
                }else{
                    $card_d->difference_grade2 = 0;
                    $card_d->difference_per_grade2 = 0;
                    $card_d->save();
                }
            }else{
                $value_ave = new Card_value;
                $value_ave->value_ave = $card_d->value_ave_grade2;
                $value_ave->grade_id = 2;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                $card_d->difference_grade2 = 0;
                $card_d->difference_per_grade2 = 0;
                $card_d->save();
            }
            
            $card_ave_grade3 = $card_d->posts()
            ->where('grade_id',3)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->avg('value');
            if ($card_ave_grade3 != null){
                $value_ave = new Card_value;
                $card_d-> value_ave_grade3 = intval($card_ave_grade3);
                $card_d->save();
                $value_ave->value_ave = intval($card_ave_grade3);
                $value_ave->grade_id = 3;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                //差額、変化率の計算
                $pre3_aves_grade3 = $card_d->card_values()->where('grade_id',3)->orderBy('id','DESC')->limit(4)->get();
                $ave_list = [];
                foreach($pre3_aves_grade3 as $ave_grade3){
                    array_push($ave_list, $ave_grade3->value_ave);
                }
                if(count($ave_list) ===4){
                    $card_d->difference_grade3 = $ave_list[0]-$ave_list[3];
                    $card_d->save();
                    $card_d->difference_per_grade3 = round(($card_d->difference_grade3)*100 / ($card_d->value_ave_grade3), 2);
                    $card_d->save();
                }else{
                    $card_d->difference_grade3 = 0;
                    $card_d->difference_per_grade3 = 0;
                    $card_d->save();
                }
            }else{
                $value_ave = new Card_value;
                $value_ave->value_ave = $card_d->value_ave_grade3;
                $value_ave->grade_id = 3;
                $value_ave->card_id = $card_d->id;
                $value_ave->save();
                $card_d->difference_grade3 = 0;
                $card_d->difference_per_grade3 = 0;
                $card_d->save();
            }
            //最大
            $card_max_grade1 = $card_d->posts()
            ->where('grade_id',1)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->max('value');
            if ($card_max_grade1 != null){
                $card_d-> value_max_grade1 = intval($card_max_grade1);
                $card_d->save();
            }
            $card_max_grade2 = $card_d->posts()
            ->where('grade_id',2)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->max('value');
            if ($card_max_grade2 != null){
                $card_d-> value_max_grade2 = intval($card_max_grade2);
                $card_d->save();
            }
            $card_max_grade3 = $card_d->posts()
            ->where('grade_id',3)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->max('value');
            if ($card_max_grade3 != null){
                $card_d-> value_max_grade3 = intval($card_max_grade3);
                $card_d->save();
            }
            //最小
            $card_min_grade1 = $card_d->posts()
            ->where('grade_id',1)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->min('value');
            if ($card_min_grade1 != null){
                $card_d-> value_min_grade1 = intval($card_min_grade1);
                $card_d->save();
            }
            $card_min_grade2 = $card_d->posts()
            ->where('grade_id',2)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->min('value');
            if ($card_min_grade2 != null){
                $card_d-> value_min_grade2 = intval($card_min_grade2);
                $card_d->save();
            }
            $card_min_grade3 = $card_d->posts()
            ->where('grade_id',3)
            ->where('updated_at','>=',date("Y-m-d H:i:s",strtotime("-3 day")))->min('value');
            if ($card_min_grade3 != null){
                $card_d-> value_min_grade3 = intval($card_min_grade3);
                $card_d->save();
            }
            
        }
    }
}    
        
