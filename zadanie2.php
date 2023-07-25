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
    <h1>Zadanie 2</h1>
    <?php

    class TextInput {
        protected $value = ''; 
    
        public function add($text) {
            $this->value .= $text; 
        }
    
        public function getValue() {
            return $this->value; 
        }
    }
    
    class NumericInput extends TextInput {
        public function add($text) {
            
            
            
            if (is_numeric($text)) {
                parent::add($text); 
            }
        }
    }
    
    
    
    
    $input = new NumericInput();
    
    
    $input->add('Hello');
    $input->add('123');
    $input->add('4.5');
    $input->add('world');
    
    
    echo $input->getValue(); 
    
    ?>
</body>
</html>