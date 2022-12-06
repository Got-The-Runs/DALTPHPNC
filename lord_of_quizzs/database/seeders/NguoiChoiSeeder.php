<?php

namespace Database\Seeders;

use App\Models\NguoiChoi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NguoiChoi::create(
            [   'user_id' => 1,
                'name'=> 'admin',
                'ngay_choi'=> '1/12/2020',
                'tong_diem'=>14000,
            ],);
            NguoiChoi::create([   'user_id' => 1,
                'name'=> 'admin',
                'ngay_choi'=> '2/12/2020',
                'tong_diem'=>14300,
            ],);
            NguoiChoi::create([   'user_id' => 1,
                'name'=> 'admin',
                'ngay_choi'=> '3/12/2020',
                'tong_diem'=>18000,
            ],);
            NguoiChoi::create( [   'user_id' => 1,
                'name'=> 'admin',
                'ngay_choi'=> '6/12/2020',
                'tong_diem'=>38400,
            ]);
    }
}
