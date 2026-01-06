<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipement extends Model
{
    protected $table = "equipement";
    
    public function bateaux(): BelongsToMany
    {
        return $this->belongsToMany(Bateau::class);
    }
}
