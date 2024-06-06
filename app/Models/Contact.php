<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable =  ['ct_name', 'ct_email', 'ct_phone', 'ct_topic', 'ct_concent', 'ct_privacy', 'ct_role', 'ct_company', 'ct_country'];
}
