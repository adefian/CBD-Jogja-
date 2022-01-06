<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    // Province -> Regency (One to Many)
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    // Province -> Store (One to Many)
    public function stores()
    {
        return $this->hasOne(Store::class);
    }
}
