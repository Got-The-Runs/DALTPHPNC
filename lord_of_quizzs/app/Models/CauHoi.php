<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauHoi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    use SoftDeletes;
    protected $guarded =[];
    
    public function chitietbocauhois(){
        return $this->hasMany(chitietbocauhoi::class);
    }
    
}
