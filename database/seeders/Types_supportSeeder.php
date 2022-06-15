<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Types_supportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('types_support')->insert([
            [
                'id'=>'1',
                'name'=>'Hỗ trợ cán bộ kỹ thuật vận hành phòng họp trực tuyến của đơn vị.',
                'created_at' => $date,
                'updated_at' => $date,

            ],
             [
                'id'=>'2',
                'name'=>'Hỗ trợ cán bộ kỹ thuật vận hành phòng họp trực tuyến của đơn vị.',
                'created_at' => $date,
                'updated_at' => $date,

            ],
            [
                'id'=>'3',
                'name'=>'Hỗ trợ phòng họp trực tuyến qua hệ thống Jitsi Meet',
                'created_at' => $date,
                'updated_at' => $date,

            ],
        ]);
    }
}
