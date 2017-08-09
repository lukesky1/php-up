<?php

namespace frontend\helpers;

/**
 * @author admin
 */
class HighlightHelper
{

    public static function process($text, $content)
    {
        $text = preg_quote($text);
        $words = explode(' ', trim($text));        
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $content);
    }

}
