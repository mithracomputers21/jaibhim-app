<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_type'
    ];

    public function member()
    {
        return $this->hasOne(Member::class);
    }
}
