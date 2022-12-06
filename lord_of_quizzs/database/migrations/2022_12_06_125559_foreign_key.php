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
        Schema::table('bo_cau_hois', function (Blueprint $table) {
            $table->foreignId('linh_vuc_id')->constrained();
        });
    
        Schema::table('chi_tiet_bo_cau_hois', function (Blueprint $table) {
            $table->foreignId('bo_cau_hoi_id')->constrained();
        });
         Schema::table('chi_tiet_bo_cau_hois', function (Blueprint $table) {
            $table->foreignId('cau_hoi_id')->constrained();
        });
        Schema::table('nguoi_chois', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
