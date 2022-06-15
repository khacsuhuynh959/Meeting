<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
        DB::table('roles')->insert([
            [
            'id'=>1,
            'name'=>'Lãnh Đạo',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>2,
            'name'=>'Quản Trị Hệ Thống',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>3,
            'name'=>'Bộ Phận Quản Lý',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            [
            'id'=>4,
            'name'=>'Đơn Vị',
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
        ]);
    }
}
