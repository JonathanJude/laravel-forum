<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;
use App\User;

class Comment extends Model
{

    protected $fillable = ['user_id', 'topic_id', 'comment'];
    public function topic()
        {
            return $this->belongsTo('App\Topic');
        }

        public function user()
        {
            return $this->belongsTo('App\User');
        }
}
