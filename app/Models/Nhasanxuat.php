<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nhasanxuat extends Model
{
    use HasFactory;
    protected $table = 'nhasanxuat';

    protected $fillable = ['ten', 'logo', 'status'];

    protected $attributes = ['logo' => '', 'status' => 0];

    use SoftDeletes;
}
