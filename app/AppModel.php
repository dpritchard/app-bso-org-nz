<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Utilities\Hasher;

class AppModel extends Model
{
    /**
    * The Hashid version of the primary key
    * @return string A Hashid string
    */
    public function getHashidAttribute()
    {
        return Hasher::encode($this->id);
    }
}
