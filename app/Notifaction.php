<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifaction extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}