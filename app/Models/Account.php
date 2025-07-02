<?php

namespace App\Models;

use App\Models\User\AppUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Laravel\Cashier\Billable;
use Laravel\Jetstream\HasProfilePhoto;

class Account extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['name', 'email', 'other_account_fields'];

//    protected function defaultProfilePhotoUrl()
//    {
//        return asset('/img/kobe512.png');
//    }

    public function users(): HasMany
    {
        return $this->hasMany(AppUser::class, 'account_id');
    }

    public function owner(): HasOne
    {
        return $this->hasOne(AppUser::class, 'owner_id');
    }

    public function leagues(): HasMany
    {
        return $this->hasMany(League::class);
    }

//    protected function getSubscriptionPlanInfo()
//    {
//        $limit = 100;
//        $subscription = null;
//
//        if ($this->subscribed('third_plan')) {
//            $limit = 40000;
//            $subscription = $this->subscription('third_plan');
//        } elseif ($this->subscribed('second_plan')) {
//            $limit = 15000;
//            $subscription = $this->subscription('second_plan');
//        } elseif ($this->subscribed('first_plan')) {
//            $limit = 3000;
//            $subscription = $this->subscription('first_plan');
//        }
//
//        return [
//            'limit' => $limit,
//            'plan_type' => $subscription?->type ?? 'free',
//            'start_date' => $subscription?->created_at ?? Carbon::now()->startOfMonth(),
//            'end_date' => $subscription?->ends_at ?? Carbon::now()->endOfMonth(),
//        ];
//    }

    public function delete()
    {
        foreach ($this->users as $user) {
            $user->delete();
        }

        parent::delete();
    }

}
