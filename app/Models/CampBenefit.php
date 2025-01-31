<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    protected $fillable = ['camp_id', 'name'];

    public function camp()
    {
        return $this->belongsTo(Camp::class);
    }
}
