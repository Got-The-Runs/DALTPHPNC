<?php

namespace Database\Seeders;

use App\Models\LinhVuc;
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
        LinhVuc::where('id',1)->first()->bocauhois()->createMany([
            [
                'linh_vuc_id'=>1,
                'id_bo_cau_hoi'=>1,
                'trang_thai' =>1,
            ],
            [
                'linh_vuc_id'=>3,
                'id_bo_cau_hoi'=>2,
                'trang_thai' =>1,
            ],
            [
                'linh_vuc_id'=>3,
                'id_bo_cau_hoi'=>2,
                'trang_thai' =>1,
            ],      
        ]);
    }
}
