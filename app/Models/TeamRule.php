<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamRule extends Model
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
        'description',
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

    public function teams(): BelongsToMany
    {
        return $this->BelongsToMany(
            Team::class,
            'team_team_rules',
            'team_rule_id',
            'team_id',
        );
    }

    public function descriptions(): HasMany
    {
        return $this->HasMany(
            RuleDescription::class,
            'rule_id',
        );
    }

    public function starPlayers(): BelongsToMany
    {
        return $this->BelongsToMany(
            StarPlayer::class,
            'star_player_team_rules',
            'star_player_team_rule_id',
            'star_player_id',
        );
    }
}
