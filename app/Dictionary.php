<?php


namespace app;


class Dictionary implements DictionaryInterface
{

    /**
     * @var array
     */
    public static $words = [

    ];

    /**
     * @inheritdoc
     */
    public function getDictionary():array
    {
        return static::$words;
    }
}