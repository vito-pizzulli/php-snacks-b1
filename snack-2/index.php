<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<body>
    <form action="./index.php" type="GET">
        <input type="text" name="name" id="name" placeholder="Inserisci il nome"></input>
        <input type="mail" name="mail" id="mail" placeholder="Inserisci la mail"></input>
        <input type="number" name="age" id="age" placeholder="Inserisci l'età"></input>
        <button type="submit">Conferma</button>
    </form>
</body>
</html>

<?php
    if (empty($name) || empty($mail) || empty($age)) {
        echo "Inserisci nome, mail ed età per effettuare l'accesso.";
    } elseif ((strlen($name) > 3) && (str_contains($mail, '.')) && (str_contains($mail, '@')) && (is_numeric($age))) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>