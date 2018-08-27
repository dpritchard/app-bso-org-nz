<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Event;

class Category extends Model
{
    /**
     * Get the events for the category.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
