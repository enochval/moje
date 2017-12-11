<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['user_id', 'payment_purpose_id', 'amount', 'transaction_id', 'recorded_by'];

    const
        PAID = 'PAID',
        NOT_PAID = 'NOT PAID';

    public function payment_purpose()
    {
        return $this->belongsTo(PaymentPurpose::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
