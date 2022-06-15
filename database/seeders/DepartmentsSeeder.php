<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Prophecy\Call\Call;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
        DB::table('departments')->insert([
            ['id'=> 1 ,
                'name'=>'Phòng Bưu Chính Viễn Thông Công Nghệ Thông Tin',
                'created_at'=>$dateTime,
                'updated_at'=>$dateTime,
             ],
             [
                'id'=> 2,
                'name'=>'Văn Phòng Sở',
                'created_at'=>$dateTime,
                'updated_at'=>$dateTime,
             ],
             [
                'id'=> 3 ,
                'name'=>'Thanh Tra Sở',
                'created_at'=>$dateTime,
                'updated_at'=>$dateTime,
             ],
             [
                'id'=> 4,
                'name'=>'Phòng Thông Tin Và Báo Trí Xuất Bản',
                'created_at'=>$dateTime,
                'updated_at'=>$dateTime,
             ],
             [
                'id'=> 5,
                'name'=> 'Ban Giám Đốc',
                'create_at'=>$dateTime,
                'update_at'=>$dateTime,
             ],
             [
                 'id'=>6,
                 'name'=> 'Bộ Phận Quản Lý',
                 'created_at'=>$dateTime,
                 'update_at'=>$dateTime,
             ],
             [
                 'id'=>7,
                 'name'=> 'Bộ Phận Hổ Trợ',
                 'create_at'=> $dateTime,
                 'update_at'=>$dateTime,
             ]
        ]);
       
    }
}
