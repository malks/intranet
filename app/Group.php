<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    //Users part of this group
    public function users()
    {
        return $this->belongsToMany('App\User','users_groups','id_group','id_user');
    }


    //Users Following this group
    public function usersFollowers()
    {
        return $this->belongsToMany('App\User','users_groups_followers','id_group','id_user');
    }


    //Groups that can follow this group
    public function groupsFollowers()
    {
        return $this->belongsToMany('App\Group','groups_followers','id_group','id_follower_group');
    }

    //Groups this group can follow
    public function groupsFollowing()
    {
        return $this->belongsToMany('App\Group','groups_followers','id_follower_group','id_group');
    }


    //Feeds posted on this group
    public function feeds()
    {
        return $this->belongsToMany('App\Feed','groups_feeds','id_group','id_feed');
    }


    //Feeds shared with this group
    public function feedsShared()
    {
        return $this->belongsToMany('App\Feed','feed_shared_group','id_group_shared','id_feed');
    }


}
