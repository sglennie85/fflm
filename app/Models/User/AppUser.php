<?php

namespace App\Models\User;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Parental\HasParent;

class AppUser extends User
{
    use HasParent;

    protected $guarded = ['id'];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
