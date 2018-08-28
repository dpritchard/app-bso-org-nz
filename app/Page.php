<?php

namespace App;

use App\AppModel;

class Page extends AppModel
{
    protected $fillable = ['uri', 'title', 'body'];

    public function path()
    {
        return (string) '/' . $this->uri;
    }

    public function getBodyHtmlAttribute()
    {
        return markdown($this->body);
    }

    public function getTitleHtmlAttribute()
    {
        return markdown($this->title, $block = false);
    }
}
