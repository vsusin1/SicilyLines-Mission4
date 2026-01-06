<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bateau extends Model
{
    protected $table = "bateau";

    public function equipements(): BelongsToMany
    {
        return $this->belongsToMany(Equipement::class);
    }
}
