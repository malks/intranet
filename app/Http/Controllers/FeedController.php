<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Feed;
use App\Group;

class FeedController extends Controller
{
    public function boot(){
        $user = Auth::user();

        $shared_group_feeds=Feed::select('feeds.*')
        ->join('feed_shared_group','feeds.id','=','feed_shared_group.id_feed')
        ->join('users_groups_followers','users_groups_followers.id_group','=','feed_shared_group.id_group_shared')
        ->where('users_groups_followers.id_user','=',$user->id);

        $shared_user_feeds=Feed::select('feeds.*')
        ->join('feed_shared_user','feeds.id','=','feed_shared_user.id_feed')
        ->where('feed_shared_user.id_user_shared','=',$user->id);

        $feeds=Feed::select('feeds.*')
        ->join('groups_feeds','groups_feeds.id_feed','=','feeds.id')
        ->join('groups','groups.id','=','groups_feeds.id_group')
        ->join('users_groups_followers','users_groups_followers.id_group','=','groups.id')
        ->where('users_groups_followers.id_user','=',$user->id)
        ->union($shared_group_feeds)
        ->union($shared_user_feeds)
        ->get()
        ->toJson();
        echo $feeds;

        /*
        $groups = $user->groups()->get()->toArray();
        $group_ids=array_map(function ($arr){
            return $arr['id'];
        },$groups);

        $following_groups = $user->groupsFollowing()->get()->toArray();
        $following_group_ids=array_map(function ($arr){
            return $arr['id'];
        },$following_groups);

        $all_group_ids=array_merge($group_ids,$following_group_ids);

        $all_feedable_groups=Group::select('*')
        ->whereIn('id',$all_group_ids)
        ->with(['Feeds'])
        ->get();

        $all_feeds=Array();
        foreach ($all_feedable_groups as $group){
            $feeds=$group->feeds()->get();
            exit(Var_dump($feeds[0]));
            $shared_feeds=$group->feedsShared()->get();
            if(!empty($feeds) && is_array($feeds))
                array_merge($all_feeds,$feeds);
            if(!empty($shared_feeds) && is_array($shared_feeds))
                array_merge($all_feeds,$shared_feeds);
        }
        $user_shared_feeds=$user->feedsShared()->get();
        
        if(!empty($user_shared_feeds) && is_array($user_shared_feeds))
            array_merge($all_feeds,$user_shared_feeds);

        exit(var_dump($all_feeds));*/
    }
}
