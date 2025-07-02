<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StarPlayer extends Model
{
//    use HasApiTokens;
//    use HasFactory;
//    use HasProfilePhoto;
//    use Notifiable;
//    use TwoFactorAuthenticatable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ma',
        'st',
        'ag',
        'pa',
        'av',
        'cost',
        'special',
        'description',
        'display',
        'pair_key',
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

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(
            PlayerSkill::class,
            'star_player_skills',
            'star_player_id',
            'star_player_skill_id'
        );
    }

    public function traits(): BelongsToMany
    {
        return $this->belongsToMany(
            PlayerTrait::class,
            'star_player_traits',
            'star_player_id',
            'star_player_trait_id'
        );
    }

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(
            Region::class,
            'star_player_regions',
            'star_player_id',
            'star_player_region_id'
            );
    }

    public function rules(): BelongsToMany
    {
        return $this->belongsToMany
        (TeamRule::class,
            'star_player_team_rules',
            'star_player_id',
            'star_player_team_rule_id'
        );
    }

    public function parent() : BelongsTo
    {
        return $this->belongsTo(self::class, 'pair_key', 'pair_key')
            ->where('display', true);
    }

    public function pairedPlayers(): HasMany
    {
        return $this->hasMany(self::class, 'pair_key', 'pair_key')
            ->where('display', false);
    }

}
