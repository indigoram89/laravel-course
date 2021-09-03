<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currency extends Model
{
    use HasFactory;

    // protected $table = 'foobar';

    // protected $primaryKey = 'uuid';

    public $incrementing = false;

    // protected $connection = 'second';

    protected $fillable = [
        'id', 'name', 'price',
        'active', 'sort',
    ];

    protected $hidden = [
        'price',
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'integer',
    ];

    protected $dates = [
        'active_at',
    ];
}
