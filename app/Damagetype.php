<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Damagetype extends Model
{
    protected $table = 'damagetypes';
    protected $fillable = [
        'typedmg',
    ];
    public function characters(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
