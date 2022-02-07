<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Event;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'phone'];

    /**
     * Get the events for the contact.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
