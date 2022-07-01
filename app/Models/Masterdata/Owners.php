<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Pemilik_Kost','Nama_Pemilik_Kost','Email','Alamat','Telepone','Username','Password'
    ];
}
