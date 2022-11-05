<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'email',
        'plan_id',
        'type_id',
        'notes',
        'event_id'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function habitation()
    {
        return $this->belongsTo(Habitation::class);
    }

    public function member_libraries()
    {
        return $this->hasMany(MemberLibrary::class);
    }

    public function member_payments()
    {
        return $this->hasMany(MemberPayment::class);
    }

}