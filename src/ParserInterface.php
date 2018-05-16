<?php

namespace d.antonov\parser;  // немспейс обычно состоит из имени автора и названия, которое мы придумаем

interface ParserInterface
{
    /**
     * 
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}
