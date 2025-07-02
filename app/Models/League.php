<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    protected $fillable = ['name', 'account_id', 'active'];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function teams(): HasMany
    {
        return $this->hasMany(CoachTeam::class);
    }
}
