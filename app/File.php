<?php

namespace App;

use App\AppModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class File extends AppModel
{
    /**
     * Return a url path for this model
     * @return string A path
     */
    public function path()
    {
        return (string) '/f/' . $this->hashid . '/' . $this->name;
    }

    /**
     * The mime type attributes (e.g. image/jpg, text/plain etc...)
     * @return string The mime type
     */
    public function getMimeAttribute()
    {
        return Storage::disk()->mimeType($this->storage_path);
    }

    /**
     * Is the file an image?
     * @return boolean Is the file an image?
     */
    public function getIsImageAttribute()
    {
        return Str::contains($this->mime, 'image/');
    }

    /**
     * Returns a markdown formatted link to the fully qualified url
     * @return string The formatted link
     */
    public function md_link()
    {
        $furl = url($this->path());
        if ($this->is_image) {
            return "![$this->name]($furl)";
        } else {
            return "[$this->name]($furl)";
        }
    }

    /**
     * Returns an HTML formatted link to the fully qualified url
     * @return string The formatted link
     */
    public function html_link()
    {
        $furl = url($this->path());
        if ($this->is_image) {
            return "<img src='$furl' alt='$this->name'/>";
        } else {
            return "<a href='$furl'>$this->name</a>";
        }
    }

    /**
     * Sanitise files names, replacing UTF8 with ASCII, convert to lower and create kebab-case.
     * @param  string $text The input text that needs sanitised
     * @return string       Sanitised text
     */
    private function sanitise_filename($text)
    {
        $text = transliterator_transliterate('Any-Latin; Latin-ASCII;', $text);
        $text = Str::lower($text);
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
