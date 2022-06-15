<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = Carbon::now()->format('Y-m-d H:i:s'); 
        DB::table('accounts')->insert([
            //Lãnh Đạo
            ['id'=>1,
            'role_id'=>1,
            'username'=>'lanhdao1',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>2,
            'role_id'=>1,
            'username'=>'lanhdao2',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
             ['id'=>3,
            'role_id'=>1,
            'username'=>'lanhdao3',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>4,
            'role_id'=>1,
            'username'=>'lanhdao4',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            //Quản Trị Hệ Thống
            ['id'=>5,
            'role_id'=>2,
            'username'=>'huynhkhacsu',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>6,
            'role_id'=>2,
            'username'=>'nguyenquynhvyvy',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            //Bộ Phận Quản Lý
            ['id'=>7,
            'role_id'=>3,
            'username'=>'quanly1',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>8,
            'role_id'=>3,
            'username'=>'quanly2',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            //Bộ Phận Hỗ Trợ
             ['id'=>9,
            'role_id'=>4,
            'username'=>'hotro1',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>10,
            'role_id'=>4,
            'username'=>'hotro2',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>11,
            'role_id'=>4,
            'username'=>'hotro3',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>12,
            'role_id'=>4,
            'username'=>'hotro4',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>13,
            'role_id'=>4,
            'username'=>'hotro5',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
            ['id'=>14,
            'role_id'=>4,
            'username'=>'hotro6',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
             ['id'=>15,
            'role_id'=>4,
            'username'=>'hotro7',
            'password'=> Hash::make('12345'),
            'created_at'=>$dateTime,
            'updated_at'=>$dateTime,
            ],
        ]);
        
    }
}
