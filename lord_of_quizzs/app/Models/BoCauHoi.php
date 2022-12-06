<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoCauHoi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    use SoftDeletes;
    protected $guarded =[];

    public function linhvucs(){
        return $this->belongsTo(linhvuc::class);
    }

    public function chitietbocauhois(){
        return $this->hasMany(chitietbocauhoi::class);
    }
}
