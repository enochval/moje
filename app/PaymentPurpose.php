<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentPurpose extends Model
{
    protected $fillable = [];

    const
        REGISTRATION = 1,
        SCHOOL_FEE = 2;
}
