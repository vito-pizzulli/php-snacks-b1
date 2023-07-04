<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).
La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa tra "a" e "b" -->

<?php
    $results = [];
    $start = 5;
    $end = 10;

    function printValuesBetweenNumbers($resultsArray, $firstNumber, $secondNumber) {
        if ($firstNumber < $secondNumber) {
            for ($i = $firstNumber; $i <= $secondNumber; $i++) {
                array_push($resultsArray, $i);
            }
        }
        return $resultsArray;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 4</title>
</head>
<body>
    <p>
        <?php
            if ($start < $end) {
                var_dump(printValuesBetweenNumbers($results, $start, $end));
            } else {
        ?>      <p>The first number cannot be higher than the second one.</p>
        <?php
            }
        ?>
    </p>
</body>
</html>