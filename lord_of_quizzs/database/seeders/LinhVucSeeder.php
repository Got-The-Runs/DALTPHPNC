<?php

namespace Database\Seeders;

use App\Models\LinhVuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LinhVuc::create(['ten_linh_vuc' => 'Đố vui','trang_thai'=> 1]);
        LinhVuc::create(['ten_linh_vuc' => 'Khoa học','trang_thai'=> 1]);
        LinhVuc::create(['ten_linh_vuc' => 'Giải trí','trang_thai'=> 0]);
        LinhVuc::create(['ten_linh_vuc' => 'Ca Dao','trang_thai'=> 1]);
        LinhVuc::create(['ten_linh_vuc' => 'Toán Học','trang_thai'=> 0]);
        LinhVuc::create(['ten_linh_vuc' => 'Vật Lý','trang_thai'=> 1]);
        LinhVuc::create(['ten_linh_vuc' => 'Hóa Học','trang_thai'=> 1]);
        LinhVuc::create(['ten_linh_vuc' => 'Âm Nhạc','trang_thai'=> 1]);
    }
}
