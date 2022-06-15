<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meeting_managementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->add(-1, 'day')->format('Y-m-d');
        $dateTime = Carbon::now()->add(-1, 'day')->format('Y-m-d H:i:s');
        DB::table('meeting_managements')->insert([
        [   'id'=>1,
            'type_sp_id'=>1,
            'date'=>$date,
            'max_qty'=>5,
            'remaining_qty'=>5,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ],
        [
            'id'=>2,
            'type_sp_id'=>2,
            'date'=>$date,
            'max_qty'=>4,
            'remaining_qty'=>4,
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ]
        ]);
    }
}
