<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'about_me', 'navbar_item1', 'navbar_item2', 'navbar_item3'];
}
