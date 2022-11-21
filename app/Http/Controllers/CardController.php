<?php

namespace App\Http\Controllers;

use App\Card;
use App\Post;
use App\Reply;
use App\Card_value;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Card $card,Request $request)
    {
        if(!empty($request->order)) {
            $order = $request->order;
        }else{
            $order = 'ASC';
        }
        //$order = (!empty($request->order))? $request->order : 'DESC';
        if(!empty($request->type)) {
            $type = $request->type;
        }else{
            $type = 'name';
        }
        if(!empty($request->search)){
            $search = $request->search;
        }else{
            $search = '';
        }
        return view('index')
        ->with(['cards' => $card->getPaginateByLimitType($search,$type, $order)]);
        
    }
    
    public function description(){
        return view('description');
    }
    
    public function show(Card $card,Card_value $card_value)
    {
        //投稿データ
        $card_posts = $card->posts()->orderBy('id','DESC')->paginate(30);
        
        //グラフデータ
        $graph_elements_grade1 = $card->card_values()->where('grade_id',1)->orderBy('id','DESC')->limit(30)->get();
        $graph_elements_grade2 = $card->card_values()->where('grade_id',2)->orderBy('id','DESC')->limit(30)->get();
        $graph_elements_grade3 = $card->card_values()->where('grade_id',3)->orderBy('id','DESC')->limit(30)->get();
        $value_ave_grade1 = [];
	    $value_ave_grade2 = [];
	    $value_ave_grade3 = [];
	    $label = [];
	    foreach($graph_elements_grade1 as $graph_element_grade1){
	        array_push($value_ave_grade1, $graph_element_grade1->value_ave);
	        //array_push($label, $graph_element_grade1->created_at->format('m/d'));
	    }
	    foreach($graph_elements_grade2 as $graph_element_grade2){
	        array_push($value_ave_grade2, $graph_element_grade2->value_ave);
	        array_push($label, $graph_element_grade2->created_at->format('m/d'));
	    }
	    foreach($graph_elements_grade3 as $graph_element_grade3){
	        array_push($value_ave_grade3, $graph_element_grade3->value_ave);
	    }
	    $value_ave_grade1 = array_reverse($value_ave_grade1);
	    $value_ave_grade2 = array_reverse($value_ave_grade2);
	    $value_ave_grade3 = array_reverse($value_ave_grade3);
	    $label = array_reverse($label);
        return view('show')
        ->with(['card' => $card,'card_posts' => $card_posts,'value_ave_grade1' => $value_ave_grade1,
        'value_ave_grade2' => $value_ave_grade2, 'value_ave_grade3' => $value_ave_grade3, 'label' => $label]);
    }
}
