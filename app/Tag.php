<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    //Feeds with this tag
    public function feeds()
    {
        return $this->belongsToMany('App\Feed','feeds_tags','id_tag','id_feed');
    }

}
