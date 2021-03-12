<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    public static function boot(){
        parent::boot();
        static::creating(function ($user){
            $user->activation_token = Str::random(10);
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gravatar($size='100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

    //一对多 文章表
    public function statuses()
    {
        return $this->hasMany('App\Models\Status');
    }

    //多对多  获取粉丝
    public function followers()
    {
        return $this->belongsToMany('App\Models\User','followers', 'user_id', 'follower_id');
    }

    //多对多  获取我关注的人
    public function followings()
    {
        return $this->belongsToMany('App\Models\User','followers', 'follower_id', 'user_id');
    }
    //返回文章
    public function feed()
    {
        $user_ids = $this->followings->pluck('id')->toArray();
        array_push($user_ids, $this->id);

        return Status::whereIn('user_id', $user_ids)
            ->with('user')
            ->orderBy('created_at', 'desc');
    }
    //关注
    public function follow($user_ids)
    {
        if(! is_array($user_ids))
        {
            $user_ids = compact('user_ids');
        }
        $this->followings()->sync($user_ids, false);
    }
    //取消关注
    public function unfollow($user_ids)
    {
        if ( ! is_array($user_ids)) {
            $user_ids = compact('user_ids');
        }
        $this->followings()->detach($user_ids);
    }

    //diagnose A是否关注了B
    public function isFollowing($user_id)
    {
        return $this->followings->contains($user_id);
    }
}
