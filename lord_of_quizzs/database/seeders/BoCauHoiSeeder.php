<?php

namespace Database\Seeders;

use App\Models\LinhVuc;
use App\Models\BoCauHoi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BoCauHoi::create(
            [   'linh_vuc_id'=>1,
                'trang_thai' =>1,
            ]);
            BoCauHoi::create(
            [   'linh_vuc_id'=>2,
                 'trang_thai' =>1,
            ]);
            BoCauHoi::create(
                [   'linh_vuc_id'=>2,
                     'trang_thai' =>0,
                ]);
            BoCauHoi::create(
                    [   'linh_vuc_id'=>2,
                         'trang_thai' =>0,
                    ]);
             BoCauHoi::create(
              [   'linh_vuc_id'=>3,
                   'trang_thai' =>1,
             ]);
    }
}
