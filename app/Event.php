<?php

namespace App;

use App\AppModel;
use App\Contact;
use App\Category;

class Event extends AppModel
{
    protected $dates = ['start', 'finish'];

    /**
     * Return a url path for this model
     * @return string A path
     */
    public function path()
    {
        return (string) '/e/' . $this->hashid;
    }

    /**
     * Get the contact for the event.
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Get the contact for the event.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getBodyHtmlAttribute()
    {
        return markdown($this->body);
    }

    /**
     * Scope a query to only include future events.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFuture($query)
    {
        return $query->where('start', '>=', now());
    }

    /**
     * Scope a query to only include past events.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHistoric($query)
    {
        return $query->where('start', '<', now());
    }
}
