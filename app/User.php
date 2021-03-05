<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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


    //This user's timeline, or the group where his personal posts go
    public function timeline(){
        return $this->hasOne('App\Group','id_timeline');
    }

    //Groups this user is part of
    public function groups()
    {
        return $this->belongsToMany('App\Group','users_groups','id_user','id_group');
    }

    //Groups this user is following
    public function groupsFollowing()
    {
        return $this->belongsToMany('App\Group','users_groups_followers','id_user','id_group');
    }

    //Feeds seen by this User
    public function seen()
    {
        return $this->belongsToMany('App\User','feed_seen','id_user','id_feed');
    }
    

    //Comments by this user
    public function comments()
    {
        return $this->hasMany('App\Comment','id_user');
    }

    //Feeds user have reacted up to
    public function feedUps()
    {
        return $this->belongsToMany('App\Feed','feed_up','id_user','id_feed');
    }

    //Feeds user have reacted down to
    public function feedDowns()
    {
        return $this->belongsToMany('App\User','feed_down','id_user','id_feed');
    }

    //Comments user have reacted up to
    public function commentUps()
    {
        return $this->belongsToMany('App\Feed','comment_up','id_user','id_comment');
    }

    //Comments user have reacted down to
    public function commentDowns()
    {
        return $this->belongsToMany('App\User','comment_down','id_user','id_comment');
    }


    //Groups this user shared feeds with
    public function groupsFeedsShared()
    {
        return $this->belongsToMany('App\Group','feed_shared_group','id_user_sharer','id_group_shared');
    }

    //Users this user shared feeds with
    public function usersFeedsShared()
    {
        return $this->belongsToMany('App\User','feed_shared_user','id_user_sharer','id_user_shared');
    }


    //Feeds shared by this user with users
    public function feedsSharedUser()
    {
        return $this->belongsToMany('App\Feed','feed_shared_user','id_user_sharer','id_feed');
    }

    //Feeds shared by this user with groups
    public function feedsSharedGroup()
    {
        return $this->belongsToMany('App\Feed','feed_shared_group','id_user_sharer','id_feed');
    }

    //Feeds shared with this user
    public function feedsShared()
    {
        return $this->belongsToMany('App\Feed','feed_shared_user','id_user_shared','id_feed');
    }

}
