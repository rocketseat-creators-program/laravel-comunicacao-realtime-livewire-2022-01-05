<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const DEFAULT = 2;

    protected $table = 'profiles';
    protected $fillable = ['id', 'name', 'description'];
}
