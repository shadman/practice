<?php

class Thesaurus
{
    /**
     * @var array
     */
    private $thesaurus;

    /**
     * @param array $thesaurus
     */
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
        $this->synonyms = [
	    'buy' => ['purchase'],
	    'big' => ['great', 'large']
	];
    }

    /**
     * @param string $word
     */
    public function getSynonyms($word)
    {
	

	$result = (isset($this->synonyms[$word])) ? $this->synonyms[$word] : [];
	return json_encode(["word" => $word, "synonyms" => $result]);
    }
}
