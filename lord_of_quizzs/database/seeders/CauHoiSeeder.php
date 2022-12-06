<?php

namespace Database\Seeders;

use App\Models\CauHoi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CauHoi::create(
            [   'cau_hoi' => 'Nơi nào con trai có thể sinh con?',
                'cau_tra_loi_1'=> 'Trong Nhà',
                'cau_tra_loi_2'=> 'Dưới Nước',
                'cau_tra_loi_3'=> 'Rừng Rậm',
                'cau_tra_loi_4'=> 'Bệnh Viện',
                'dap_an'=> '2',
                'trang_thai'=> 1
            ]);
            CauHoi::create( [   'cau_hoi' => 'Sở thú bị cháy, con gì chạy ra đầu tiên?',
                'cau_tra_loi_1'=> ' Con Hổ',
                'cau_tra_loi_2'=> 'Con Voi',
                'cau_tra_loi_3'=> ' Con Người',
                'cau_tra_loi_4'=> ' Con Chim',
                'dap_an'=> '3',
                'trang_thai'=> 1
            ]);
            CauHoi::create( [   'cau_hoi' => 'Làm thế nào để không đụng phải ngón tay khi bạn đập búa vào một cái móng tay?',
                'cau_tra_loi_1'=> ' Cầm búa bằng tay trái   ',
                'cau_tra_loi_2'=> 'Cầm búa bằng cả 2 tay',
                'cau_tra_loi_3'=> ' Cầm báu bằng chân',
                'cau_tra_loi_4'=> ' Cầm búa bằng tay phải',
                'dap_an'=> '2',
                'trang_thai'=> 1,
            ]);
            CauHoi::create( [   'cau_hoi' => 'Có bao nhiêu chữ C trong câu sau: "Cơm, canh, cá, tất cả em đều thích"?',
                'cau_tra_loi_1'=> '1 chữ',
                'cau_tra_loi_2'=> '5 chữ',
                'cau_tra_loi_3'=> '2 chữ',
                'cau_tra_loi_4'=> '4 chữ',
                'dap_an'=> '1',
                'trang_thai'=> 1,
            ]);
    }
}
