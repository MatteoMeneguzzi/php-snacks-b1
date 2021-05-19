<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- PHP Snack 1: -->
<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->

<?php
    $matches = [
        [
            'home-team' => 'Olimpia Milano',
            'away-team' => 'Cantù',
            'home-team-points' => 63,
            'away-team-points' => 54,
            
        ],
         [
            'home-team' => 'Chicago Bulls',
            'away-team' => 'Los Angeles Lakers',
            'home-team-points' => 92,
            'away-team-points' => 81,
        ],
         [
            'home-team' => 'Brooklyn Nets',
            'away-team' => 'Golden State Warriors',
            'home-team-points' => 101,
            'away-team-points' => 105,
        ],

    ];
    
    for ($i = 0; $i < count($matches); $i++) {
        var_dump($matches[$i]);
    }
    ?>



   <ul>
       <?php for ($i = 0; $i < count($matches); $i++) : ?>
        <!-- var_dump($team[$i]['role']); -->
        <li class="item">
            <?php echo ($matches[$i]['home-team']); ?> -
            <?php echo ($matches[$i]['away-team']); ?> |
            <?php echo ($matches[$i]['home-team-points']); ?> -
            <?php echo ($matches[$i]['away-team-points']); ?>
        </li>
        
        <?php endfor; ?>
    </ul>


<!-- PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



    <h3>response</h3>

    <?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = intval($_GET['age']);
    var_dump($age);


    // CHECK DEL PARAMETRO
    if (empty($name) || empty($mail) || empty($age)) {
        echo "Error, insert all parameters";
    }
    elseif (strlen($name) <= 3) {
        echo 'Please enter a valid name (longer than 3 characters)';
    } elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
    echo "Please enter a valid mail which contains '@' and '.'";
    } elseif (is_nan($age) == true) {
        echo 'Please enter a valid number';
    } else {
        echo 'Registration completed' . "<br/>";
    }
    ?>


<!-- PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$numbers = [];
    for ($i = 0; $i < 15; $i++) {
        
        $number = rand(1, 15);

        while(in_array($number, $numbers)) {
          $number = rand(1, 15);
        }           
        $numbers[] = $number;
    }
    var_dump($numbers);  
?>

<?php
    $max_numbers = 15;
    $numeri = [];

    while (count($numeri) < $max_numbers) {
        $numero = rand(1, 15);
        if(!in_array($numero, $numeri)) {
            $numeri[] = $numero;
        }
    }var_dump($numeri);
?>


</body>
</html>