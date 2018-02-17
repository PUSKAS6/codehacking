<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    //
    protected $uploads  = '/images/';
    
    protected $fillable = ['file'];
    
    
    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
    
    
    public function getFileAttribute($photo)
    {
        
        return asset('/images/' . $photo);
    }
    
}
