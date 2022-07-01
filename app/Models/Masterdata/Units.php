<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $fillable = [
        'unit_name',
        'provinsi_id',
        'unit_address',
        'gender_id',
        'unit_telphone',
        'unit_imageskost',
        'unit_imagesimb',
        'unit_deskripsi',
        'unit_lat',
        'unit_ing',
        'user_id'
    ];

    // public function putUnitItem() {
    //     return $this->hasMany('App\Models\Masterdata\Items', 'unit_id');
    // }
}
