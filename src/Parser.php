<?php

//require_once 'ParserInterface.php';

namespace antonov\parser;  // немспейс обычно состоит из имени автора и названия, которое мы придумаем

/**
 * Description of Parser
 *
 * @author valerchik
 */
class Parser implements ParserInterface
{
	/**
     * @param string $url
     * @param string $tag
     * @return array
     */
    //public function process(string $url, string $tag): array 
    public function process(string $tag, string $url): array 
    {
        $htmlPage = file_get_contents($url);
		
		if ($htmlPage === false) {
			return ['Invalid URL'];
		}
		
		//Regular expression
		preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
		
		if (empty($strings[1])) {
			return ['There are no such tags on the page'];
		}
		
		return $strings[1];
    }
	
	public function test()
	{
		// feature
	}

}
