<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Card_value;
use App\Post;

class deleteold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteold';

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
    public function handle(Post $post,Card_value $card_value)
    {
        $deletePost = $post->where('updated_at','<',date("Y-m-d H:i:s",strtotime("-1 year")))->delete();
        $deleteCard_value = $card_value->where('updated_at','<',date("Y-m-d H:i:s",strtotime("-1 year")))->delete();
    }
}
