<?php

namespace App;

use App\AppModel;
use Illuminate\Support\Facades\Storage;

class File extends AppModel
{
    public function path()
    {
      return (string) '/f/' . $this->hashid . '/' . $this->name;
    }

    public function getMimeAttribute()
    {
        return Storage::disk($this->visibility)->mimeType($this->storage_path);
    }

    public function getIsImageAttribute()
    {
        return str_contains($this->mime, 'image/');;
    }

    public function md_link()
    {
        $furl = url($this->path());
        if($this->is_image){
            return "![$this->name]($furl)";
        } else {
            return "[$this->name]($furl)";
        }
    }

    public function html_link()
    {
        $furl = url($this->path());
        if($this->is_image){
            return "<img src='$furl' alt='$this->name'/>";
        } else {
            return "<a href='$furl'>$this->name</a>";
        }
    }

    private function sanitise_filename($text)
    {
        $text = transliterator_transliterate('Any-Latin; Latin-ASCII;',$text);
        $text = strtolower($text);
        $text = preg_replace('/[^\\w\\d\\.]+/u', '-', $text);
        $text = preg_replace('/(-\\.)+/u', '.', $text);
        return $text;
    }
    /**
    * The kebab-case version of the filename
    * @return string A kebab-case string
    */
    public function getNameAttribute($value)
    {
        return $this->sanitise_filename($value);
    }

    /**
     * Modify filename on set.
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $this->sanitise_filename($value);
    }


}
