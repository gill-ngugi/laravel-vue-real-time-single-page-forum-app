<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    //To prevent mass assignment errors by laravel, use fillable.
    // protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];

    protected $guarded = [];

    //For model binding to use a database column other than id 
    // when retrieving a given model class, you may override the 
    // getRouteKeyName method on the Eloquent model
    public function getRouteKeyName(){
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute(){
        return asset("api/questions/$this->slug");
    }


}
