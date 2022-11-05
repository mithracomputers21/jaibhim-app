<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPayment extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'member_payments';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'member_id',
        'method_id',
        'payment_date',
        'amount',
        'transaction_id',
        'receipt_number',
        'bank_status',
        'verified_by',
    ];

    public function method()
    {
        return $this->belongsTo(Method::class);
    }
}
