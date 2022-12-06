<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiChoi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $guarded =[];
    public function users(){
        return $this->belongsTo(user::class);
    }
}
