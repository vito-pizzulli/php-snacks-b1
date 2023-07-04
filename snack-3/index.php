<!-- Scrivi una funzione che fonda due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro
es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5]. -->

<?php
    $letters = ['a', 'b', 'c', 'd', 'e'];
    $numbers = ['1', '2', '3', '4', '5'];
    $mergedArray = [];

    function mergeArrayAlternateElements($mergedArray, $firstArray, $secondArray) {
        for ($i = 0; $i < count($firstArray); $i++) {
            array_push($mergedArray, $firstArray[$i], $secondArray[$i]);
        }

        return $mergedArray;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 3</title>
</head>
<body>
    <p>
        <?php
            var_dump(mergeArrayAlternateElements($mergedArray, $letters, $numbers));
        ?>
    </p>
</body>
</html>