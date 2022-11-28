<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'type_id');
    }

    public function unit(): HasOne
    {
        return $this->hasOne(Unit::class, 'type_id');
    }
}
