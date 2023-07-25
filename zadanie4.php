<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>*{
    font-family: sans-serif;
    text-align: center;
    }
    </style>
    <h1>Zadanie 4</h1>
    <?php

    class Thesaurus {
        private $thesaurusData;
    
        public function __construct($thesaurusData) {
            $this->thesaurusData = $thesaurusData;
        }
    
        public function getSynonyms($word) {
            
            if (array_key_exists($word, $this->thesaurusData)) {
                $synonyms = $this->thesaurusData[$word];
            } else {
                $synonyms = array();
            }
    
            
            $result = array(
                'word' => $word,
                'synonyms' => $synonyms
            );
    
            return json_encode($result);
        }
    }
    
    
    $thesaurusData = array(
        "market" => array("trade"),
        "small" => array("little", "compact")
    );
    
    $thesaurus = new Thesaurus($thesaurusData);
    
    
    echo $thesaurus->getSynonyms("small"); 
    echo $thesaurus->getSynonyms("asleast"); 
    
    ?>
</body>
</html>