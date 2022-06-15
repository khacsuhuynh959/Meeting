<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
    $date = Carbon::now()->format('Y-m-d');
    DB::table('supporters')->insert([
        [
            'id'=>1,
            'user_id'=>12,
            'date'=>$date,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ],
        [
            'id'=>2,
            'user_id'=>13,
            'date'=>$date,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ],
         [
            'id'=>3,
            'user_id'=>14,
            'date'=>$date,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ],
        [
            'id'=>4,
            'user_id'=>15,
            'date'=>$date,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ],
  
    ]);
    }
}
