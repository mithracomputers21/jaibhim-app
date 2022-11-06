<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberLibrary extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'member_libraries';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'member_id',
        'district_id',
        'block_id',
        'village_id',
        'habitation_id',
        'contact_person_name',
        'contact_person_number',
        'library_available',
        'library_name',
    ];

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

    public function method()
    {
        return $this->belongsTo(Method::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}