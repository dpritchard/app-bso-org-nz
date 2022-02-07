<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Event;

class Category extends Model
{
    use HasFactory;
    /**
     * Get the events for the category.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
