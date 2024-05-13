<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['jb_title', 'jb_description', 'jb_requirements', 'jb_date_posted', 'jb_posted_by', 'jb_status'];
}
