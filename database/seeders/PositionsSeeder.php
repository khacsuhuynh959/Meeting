<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
        DB::table('positions')->insert([
            ['id'=>'1',
            'name'=>'Giám Đốc',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>'2',
            'name'=>'Phó Giám Đốc',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>'3',
            'name'=>'Trưởng Phòng',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>'4',
            'name'=>'Phó Trưởng Phòng',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>'5',
            'name'=>'nhân Viên',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            
        ]);
        
    }
}
