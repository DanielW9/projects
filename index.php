<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie1</title>
</head>
<body>
    <style>*{
    font-family: sans-serif;
    text-align: center;
    }
    </style>
    <h1>Zadanie 1</h1>
    <?php
    class Pipeline {
        public static function make(...$functions) {
            return function ($arg) use ($functions) {
                $result = $arg;
                foreach ($functions as $function) {
                    $result = $function($result);
                }
                return $result;
            };
        }
    }
    

    $myPipeline = Pipeline::make(
        function($var) { return $var * 3; },
        function($var) { return $var + 1; },
        function($var) { return $var / 2; }
    );
    

    $result = $myPipeline(3);
    echo $result; 
    
    ?>
</body>
</html>