<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    public function owner(){
        return $this->hasOne('App\User','id_user');
    }

    //Groups this feed was posted on
    public function groups()
    {
        return $this->belongsToMany('App\Group','groups_feeds','id_feed','id_group');
    }

    //Tags on this feed
    public function tags()
    {
        return $this->belongsToMany('App\Tag','feeds_tags','id_feed','id_tag');
    }

    //Comments on this feed
    public function comments()
    {
        return $this->hasMany('App\Comment','id_feed');
    }

    //Users that have seen this feed
    public function seen()
    {
        return $this->belongsToMany('App\User','feed_seen','id_feed','id_user');
    }

    //Users that have reacted up for this feed
    public function ups()
    {
        return $this->belongsToMany('App\User','feed_up','id_feed','id_user');
    }

    //Users that have reacted down for this feed
    public function downs()
    {
        return $this->belongsToMany('App\User','feed_down','id_feed','id_user');
    }

    //Groups this feed was shared on
    public function groupsShared()
    {
        return $this->belongsToMany('App\Group','feed_shared_group','id_feed','id_group_shared');
    }

    //Users this feed was shared with
    public function usersShared()
    {
        return $this->belongsToMany('App\User','feed_shared_user','id_feed','id_user_shared');
    }

    //Users shared this feed with groups
    public function userGroupsSharer()
    {
        return $this->belongsToMany('App\User','feed_shared_group','id_feed','id_user_sharer');
    }

    //Users shared this feed with users
    public function userUsersSharer()
    {
        return $this->belongsToMany('App\User','feed_shared_user','id_feed','id_user_sharer');
    }

}
