<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolBankDetail extends Model
{
  public function bank()
  {
    return $this->belongsTo(Bank::class, 'bank_id');
  }
}
