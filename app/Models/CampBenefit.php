<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    protected $fillable = ['name'];

    public function camp()
    {
        return $this->belongsTo(Camp::class);
    }
}
