<?php

namespace App;

use App\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends AppModel
{
    use HasFactory;
    
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
