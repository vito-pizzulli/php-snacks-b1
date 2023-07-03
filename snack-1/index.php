<!-- Dato un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
        [
            'team1' => 'Giggioletta Giggiona',
            'team2' => 'Aquile Reali Unilaterali',
            'point_team_1' => 121,
            'point_team_2' => 111
        ],
        [
            'team1' => 'Unicorni Vipiteno',
            'team2' => 'Lampredotti Lampedusa',
            'point_team_1' => 88,
            'point_team_2' => 89
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Matches</title>
</head>
<body>
    <ul>
        <?php
        foreach ($matches as $match) { ?>
            <li>
                <?php
                    echo $match['team1'] . ' - ' . $match['team2'] . ' | ' . $match['point_team_1'] . '-' . $match['point_team_2'];
                ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>