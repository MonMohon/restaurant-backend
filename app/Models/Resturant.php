<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resturant extends Model
{
    protected $table = 'restaurants';
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['title', 'body','site_url','image_url','area','country','slug','user_id'];

    /**
    * The has Many Relationship
    *
    * @var array
    */
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}