<?php

namespace frontend\helpers;

/**
 * @author admin
 */
class HighlightHelper
{

    public static function process($text, $content)
    {
        $words = explode(' ', trim($text));
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $content);
    }

}
