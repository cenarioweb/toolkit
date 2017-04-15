<?php

namespace CenarioWeb;

class Toolkit
{
    public function __construct()
    {
    }

    public static function capitular($str)
    {
        $words = explode(' ', mb_strtolower(trim(preg_replace("/\s+/", ' ', $str))));
        $return[] = ucfirst($words[0]);

        unset($words[0]);

        foreach ($words as $word) {
            if (!preg_match("/^([dn]?[aeiou][s]?|em)$/i", $word)) {
                $word = ucfirst($word);
            }

            $return[] = $word;
        }
        $text = implode(' ', $return);
        $text = str_replace(' Ti', ' TI', $text);

        return $text;
    }
}
