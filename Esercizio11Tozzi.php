<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    $linkBase = "https://xkcd.com/";

    $numLink = rand(2, 5);

    $n = 0;

    for($i = 0; $i < $numLink; $i++){

        $n = $n + 1;

        echo "<a  target='_blank' href='" . $linkBase . $n . "'>Pagina $n</a><br>";

    }

    


?>



</body>
</html>