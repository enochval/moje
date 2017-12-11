<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }
  public static function deleteDocument($id){
    return Document::find($id)->delete();
  }
}
