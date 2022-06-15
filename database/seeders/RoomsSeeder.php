<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
        DB::table('rooms')->insert([
            [
            'id'=>1,
            'name'=>'Phòng Hội Trường',
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            ],
            [
            'id'=>2,
            'name'=>'Phòng Họp 1',
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            ],
            [
            'id'=>3,
            'name'=>'Phòng Họp 2',
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            ],
            [
            'id'=>4,
            'name'=>'Phòng Họp 2',
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            ],
        ]);
    }
}
