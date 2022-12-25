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
            CauHoi::create( [   'cau_hoi' => 'Có bao nhiêu chữ C trong câu sau: "Cơm, canh, cá, tất cả em đều thích?',
                'cau_tra_loi_1'=> '1 chữ',
                'cau_tra_loi_2'=> '5 chữ',
                'cau_tra_loi_3'=> '2 chữ',
                'cau_tra_loi_4'=> '4 chữ',
                'dap_an'=> '1',
                'trang_thai'=> 1,
            ]);
            CauHoi::create( [   'cau_hoi' => 'Bỏ ngoài nướng trong, ăn ngoài bỏ trong là gì?',
                'cau_tra_loi_1'=> 'Nướng Khoai',
                'cau_tra_loi_2'=> 'Nướng Bắp',
                'cau_tra_loi_3'=> 'Nướng Thịt',
                'cau_tra_loi_4'=> 'Nướng Cá',
                'dap_an'=> '2',
                'trang_thai'=> 0,
            ]);
            CauHoi::create( [   'cau_hoi' => 'Bệnh gì bác sỹ bó tay?',
            'cau_tra_loi_1'=> 'Đau Đầu',
            'cau_tra_loi_2'=> 'Gãy Chân',
            'cau_tra_loi_3'=> 'Ho Khan',
            'cau_tra_loi_4'=> 'Gãy Tay',
            'dap_an'=> '4',
            'trang_thai'=> 0,
        ]);
         CauHoi::create( [   'cau_hoi' => 'Con gì ăn lửa với nước than?',
            'cau_tra_loi_1'=> 'Tàu Điện',
            'cau_tra_loi_2'=> 'Tàu Hỏa',
            'cau_tra_loi_3'=> 'Xe Máy',
            'cau_tra_loi_4'=> 'Con Thuyền',
            'dap_an'=> '2',
            'trang_thai'=> 1,
        ]);
        CauHoi::create( [   'cau_hoi' => 'Nước Đức nằm trong vùng khí hậu nào ?',
            'cau_tra_loi_1'=> 'Ôn đới',
            'cau_tra_loi_2'=> 'Nhiệt đới',
            'cau_tra_loi_3'=> 'Nhiệt đới gió mùa',
            'cau_tra_loi_4'=> 'Hàn đới',
            'dap_an'=> '1',
            'trang_thai'=> 1,
        ]);
         CauHoi::create( [   'cau_hoi' => 'Dân số thế giới đang có xu hướng ? ',
            'cau_tra_loi_1'=> 'Trung hóa',
            'cau_tra_loi_2'=> 'Không thay đổi',
            'cau_tra_loi_3'=> 'Trẻ hóa',
            'cau_tra_loi_4'=> 'Già hóa',
            'dap_an'=> '4',
            'trang_thai'=> 1,
        ]);
        CauHoi::create( [   'cau_hoi' => 'Việt Nam gia nhập ASEAN năm nào ? ',
            'cau_tra_loi_1'=> '1993',
            'cau_tra_loi_2'=> '1994',
            'cau_tra_loi_3'=> '1995',
            'cau_tra_loi_4'=> '1996',
            'dap_an'=> '3',
            'trang_thai'=> 0,
        ]);
    }
}
