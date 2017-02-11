<?php namespace App;

class Comment extends Model
{
    use Uuids;

    public function post()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
