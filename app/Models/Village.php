<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = ['block_id', 'village_name'];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function habitations()
    {
        return $this->hasMany(Habitation::class);
    }
}
