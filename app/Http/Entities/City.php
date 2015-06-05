<?php
/**
 * Created by PhpStorm.
 * User: ricardo.burgos
 * Date: 02/06/2015
 * Time: 7:44 PM
 */

namespace autoservice\Http\entities;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    public function county()
    {
        return $this->belongsTo("autoservice\Http\Entities\County");
    }
}