<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afdeling extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam'
    ];

    public function gaorg(){
        return $this->hasMany(GaOrg::class);
    }
}
