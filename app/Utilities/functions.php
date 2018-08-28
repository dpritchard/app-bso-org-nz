<?php

/**
 * Convert some text to Markdown...
 */

// https://github.com/erusev/parsedown#security
// http://htmlpurifier.org
function markdown($text, $block = true)
{
    $parser = new ParsedownExtra;
    $purifier = new HTMLPurifier;
    if($block){
        $dirty_html = $parser->text($text);
    } else {
        $dirty_html = $parser->line($text);
    }
    return $purifier->purify($dirty_html);
}

/**
 * Join a string with a natural language conjunction at the end.
 * https://gist.github.com/angry-dan/e01b8712d6538510dd9c
 */
function natural_language_join(array $list, $conjunction = 'and')
{
    $last = array_pop($list);
    if ($list) {
        return implode(', ', $list) . ' ' . $conjunction . ' ' . $last;
    }
    return $last;
}
