<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contacts';
    public $timestamps = true;

    public $fillable = [
        'name',
        'phone',
        'enable'
    ];

    protected $casts = [
        'name' => 'string',
        'phone' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:150',
        'phone' => 'required|string|max:100',
        'enable' => 'required',
    ];

    
}
