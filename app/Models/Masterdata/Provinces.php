<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $fillable = [
        'provinsi_nama',
        'provinsi_gambar'
    ];

    public function putUnitItem() {
        return $this->hasMany('App\Models\Masterdata\Provinces', 'provinsi_id');
    }
}
