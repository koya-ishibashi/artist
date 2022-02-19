<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MypagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mypages')->insert([
            'name' => 'user01',
            'body' => 'この作品は12345678900987654321です。',
            'address' => '斑鳩町神南3丁目10番21号',
            'tel' => '090-5890-9434'
        ]);
    }
}
