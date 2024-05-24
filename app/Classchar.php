<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classchar extends Model
{
    protected $table = 'classchars';
    protected $fillable = [
        'classname',
    ];
    public function characters(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
