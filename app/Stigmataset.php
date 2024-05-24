<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stigmataset extends Model
{
    protected $table = 'stigmatasets';
    protected $fillable = [
        'stigmaname', 'imagetop', 'imagemid',
        'imagebot', 'topdesc', 'middesc', 'botdesc',
    ];
    public function characters(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
