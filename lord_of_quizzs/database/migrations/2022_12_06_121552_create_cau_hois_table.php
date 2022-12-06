<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hois', function (Blueprint $table) {
            $table->id();
            $table-> string('cau_hoi');
            $table-> string('cau_tra_loi_1');
            $table-> string('cau_tra_loi_2');
            $table-> string('cau_tra_loi_3');
            $table-> string('cau_tra_loi_4');
            $table-> integer('dap_an');
            $table-> integer('trang_thai');
            $table->softDeletes();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cau_hois');
    }
};
