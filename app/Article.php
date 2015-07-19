<?php

namespace Byng;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Provide the attributes of table that can be filled
     * to tackle any mass assignment issues
     * 
     * @var [type]
     */
    protected $fillable = [

    ];


    /**
     * Accessor for changing the MySQL timestamp into human readbale
     * format
     * 
     * @param $value
     * @return string
     */
    public function getPostedAttribute($value)
    {
       $dt = Carbon::parse($value);
       return $dt->toFormattedDateString();
    }
}
