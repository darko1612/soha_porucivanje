<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
