<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrekening extends Model
{
    use HasFactory;

    protected $fillable = [
        'nummer',
        'description'
    ];

    public function werkorder()
    {
        return $this->belongsTo(Werkorder::class);
    }

    public function rspkpl()
    {
        return $this->belongsTo(E1RspKpl2018::class,'subrekenings_id','id');
    }
}
