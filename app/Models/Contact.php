<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'phone1','phone2','phone3',
        'path', 'email1','email2','email3',
        'instagram', 'facebook', 'telegram',
    ];
}
