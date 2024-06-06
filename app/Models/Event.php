<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['ev_title', 'ev_code', 'ev_type', 'ev_start', 'ev_end', 'ev_date', 'ev_venue', 'ev_banner', 'ev_desc', 'ev_status', 'ev_presenter', 'ev_gender', 'ev_photo'];
}
