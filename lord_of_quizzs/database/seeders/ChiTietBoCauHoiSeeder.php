<?php

namespace Database\Seeders;

use App\Models\ChiTietBoCauHoi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChiTietBoCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChiTietBoCauHoi::create(
            [   'bo_cau_hoi_id' => 1,
                'cau_hoi_id'=> 1,
                'trang_thai'=> 1,
            ],);
            ChiTietBoCauHoi::create( [   'bo_cau_hoi_id' => 2,
                'cau_hoi_id'=> 2,
                'trang_thai'=> 1,
            ],);
            ChiTietBoCauHoi::create([   'bo_cau_hoi_id' => 5,
                'cau_hoi_id'=> 3,
                'trang_thai'=> 1,
            ],);
            ChiTietBoCauHoi::create( [   'bo_cau_hoi_id' => 1,
                'cau_hoi_id'=> 8,
                'trang_thai'=> 1,
            ] );
            ChiTietBoCauHoi::create( [   'bo_cau_hoi_id' => 1,
                'cau_hoi_id'=> 9,
                'trang_thai'=> 1,
            ] );
            ChiTietBoCauHoi::create( [   'bo_cau_hoi_id' => 2,
                'cau_hoi_id'=> 4,
                'trang_thai'=> 1,
            ] );
    }
}
