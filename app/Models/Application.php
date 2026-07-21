<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    
    protected $fillable = [
        'ad_soyad',
        'email',
        'telefon',
        'firma',
        'konu',
        'mesaj',
        'durum'
    ];
}