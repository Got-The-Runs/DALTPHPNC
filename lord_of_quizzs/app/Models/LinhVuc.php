<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinhVuc extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    use SoftDeletes;
    protected $guarded =[];

    public function bocauhois(){
        return $this->hasMany(bocauhoi::class);
    }
}
