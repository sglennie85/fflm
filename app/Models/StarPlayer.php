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
            'player_id',
            'player_skill_id'
        );
    }

    public function traits(): BelongsToMany
    {
        return $this->belongsToMany(
            PlayerTrait::class,
            'star_player_traits',
            'player_id',
            'player_trait_id'
        );
    }
}
