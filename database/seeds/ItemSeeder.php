<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            DB::table('items')->insert([
                'parent_id' => $this->randomParentId($i),
                'name' => 'Item '.($i+1),
            ]);
        }
    }

    public function randomParentId($i){
        if($i%6 == 0 || $i%7 == 0) return 0;
        $random = rand(0, 20);
        if($i != $random) return $random;
        return 0;
    }
}
