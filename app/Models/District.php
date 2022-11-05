<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected  $fillable = ['district_name'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }
}
