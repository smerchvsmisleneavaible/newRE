<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chartype extends Model
{
    protected $table = 'chartypes';
    protected $fillable = [
        'typename', 'typeimg',
    ];

    public function characters(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
