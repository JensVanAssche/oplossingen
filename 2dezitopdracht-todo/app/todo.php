<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public static function incomplete()
    {
        return static::where('completed', 0)->get();
    }
    
    public static function complete()
    {
        return static::where('completed', 1)->get();
    }
    
    protected $fillable = ['todo'];
}