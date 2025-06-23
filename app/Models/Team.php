<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
//    use HasApiTokens;
//    use HasFactory;
//    use HasProfilePhoto;
//    use Notifiable;
//    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'plural_name',
        'tier',
        'apothecary',
        'reroll_limit',
        'reroll_cost',
        'is_norse',
        'is_chaos',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [

    ];

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(
            Region::class,
            'team_regions',
            'team_id',
            'region_id'
        );
    }

    public function rules(): BelongsToMany
    {
        return $this->belongsToMany(
            TeamRule::class,
            'team_team_rules',
            'team_id',
            'team_rule_id'
        );
    }
    public function players(): HasMany
    {
        return $this->HasMany(
            Player::class,
            'team_id',
        );
    }
}
