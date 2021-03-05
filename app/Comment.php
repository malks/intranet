<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //User that posted this comment
    public function commenter()
    {
        return $this->belongsTo('App\User','id_user');
    }

    //Feed where comment was made
    public function feed()
    {
        return $this->belongsTo('App\Feed','id_feed');
    }

    //Users that have reacted up for this feed
    public function ups()
    {
        return $this->belongsToMany('App\User','comment_up','id_comment','id_user');
    }

    //Users that have reacted down for this feed
    public function downs()
    {
        return $this->belongsToMany('App\User','comment_down','id_comment','id_user');
    }

}
