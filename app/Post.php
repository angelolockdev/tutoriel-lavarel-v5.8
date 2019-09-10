<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'online'];  

    public function scopePublished($query){
        return $query->where('online', true)->whereRaw('created_at < NOW()');
    }

    public function getSlugAttribute($value){
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->title);
        }
    }

    public function getDates(){
        return ['create_at', 'updated_at'];
    }
}
