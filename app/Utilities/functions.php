<?php

use League\CommonMark\GithubFlavoredMarkdownConverter;

/**
 * Convert some text to Markdown...
 */

// https://commonmark.thephpleague.com/security/
// http://htmlpurifier.org
function markdown($text, $block = true)
{
    if ($text === null) return '';

    $converter = new GithubFlavoredMarkdownConverter([
        'html_input' => 'strip',
        'allow_unsafe_links' => false,
    ]);
    $purifier = new HTMLPurifier;

    $dirty_html = $converter->convert($text)->getContent();

    if (!$block) {
        // Inline mode: strip wrapping <p> tags
        $dirty_html = preg_replace('/^<p>(.*)<\/p>\s*$/s', '$1', trim($dirty_html));
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
    if (count($list) > 1) {
        return implode(', ', $list) . ' ' . $conjunction . ' ' . $last;
    } else if(count($list) == 1) {
        return $list . ' ' . $conjunction . ' ' . $last;
    } else {
        return $last;
    }
}
