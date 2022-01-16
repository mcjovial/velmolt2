<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manualtransfer extends Model
{
    protected $table = "manual_transfer";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
