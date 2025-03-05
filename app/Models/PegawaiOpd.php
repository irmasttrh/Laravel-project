<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiOpd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'pegawai_opd';
}
