<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Event;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    /**
     * Get the events for the contact.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
