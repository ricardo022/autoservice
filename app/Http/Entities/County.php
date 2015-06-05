<?php  namespace autoservice\Http\entities;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: ricardo.burgos
 * Date: 02/06/2015
 * Time: 7:29 PM
 */

class County extends Model {

    public function cities()
    {
        return $this->hasMany("autoservice\Http\entities\City");
    }

}