<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;
use App\User;

class Topic extends Model
{

    protected $fillable = ['user_id', 'title', 'content'];

        public function comments()
        {
            return $this->hasMany('App\Comment');
        }

        public function user()
        {
            return $this->belongsTo('App\User');
        }
}
