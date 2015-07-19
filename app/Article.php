<?php

namespace Byng;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [

    ];


    /**
     * @param $value
     * @return string
     */
    public function getPostedAttribute($value)
    {
       $dt = Carbon::parse($value);
       return $dt->toFormattedDateString();
    }
}
