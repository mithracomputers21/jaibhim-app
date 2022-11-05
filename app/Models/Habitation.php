<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    use HasFactory;

    protected $fillable = ['village_id', 'habitation_name'];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    
}
