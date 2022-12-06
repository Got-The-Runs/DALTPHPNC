<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietBoCauHoi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    use SoftDeletes;
    protected $guarded =[];
    
    public function bocauhois(){
        return $this->belongsTo(bocauhoi::class);
    }

    public function cauhois(){
        return $this->belongsTo(cauhoi::class);
    }
}
