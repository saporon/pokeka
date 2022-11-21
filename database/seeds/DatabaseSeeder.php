<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(promoSPCardSeeder::class);
        $this->call(promoSMCardSeeder::class);
        $this->call(BW_XYCardSeeder::class);
        $this->call(S8aPCardSeeder::class);
        $this->call(sm1MSCardSeeder::class);
        $this->call(sm2LCardSeeder::class);
        $this->call(sm3HNCardSeeder::class);
        $this->call(sm4ASCardSeeder::class);
        $this->call(sm5MSCardSeeder::class);
        $this->call(sm6ab_sm7CardSeeder::class);
        $this->call(sm8abCardSeeder::class);
        $this->call(sm9abCardSeeder::class);
        $this->call(sm10bCardSeeder::class);
        $this->call(sm11abCardSeeder::class);
        $this->call(sm12aCardSeeder::class);
        $this->call(s1aH_S2CardSeeder::class);
        $this->call(s4aCardSeeder::class);
        $this->call(s5aIRCardSeeder::class);
        $this->call(s6aHKCardSeeder::class);
        $this->call(s7DRCardSeeder::class);
        $this->call(s8abCardSeeder::class);
        $this->call(s9CardSeeder::class);
        //$this->call(s10abDPCardSeeder::class);
        //$this->call(s11CardSeeder::class);
        //$this->call(s11aCardSeeder::class);
        //$this->call(s12CardSeeder::class);
        //$this->call(GradeSeeder::class);
        
    }
}
