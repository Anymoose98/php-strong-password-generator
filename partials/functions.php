<?php 
// Funzione che genera password
function generaPassword($numero, $caratteri_mischiati){
    if((isset($numero) && $numero < 3)){
        $password_generata="Numero inserito non valido, inserisci un numero maggiore o uguale a 3";
    }
    else if(isset($_GET["numero"]) ? $_GET["numero"] : null){
        $password_generata = substr("$caratteri_mischiati", 0, $numero);
    }
    else{
        $password_generata = "Crea la tua password";
    }
    return $password_generata;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
pROVA
</body>
</html>


