<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table='tb_transaksi';//tabel yang mau di tuju

    //field-field yang ada di tabel
    protected $fillable=['id','nama','golongan','nik','alamat','harga','waktu', 'status'];
}
