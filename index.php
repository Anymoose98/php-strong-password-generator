<?php 
    $password_generata="";

    // Numero dato dall'utente
    $numero = isset($_GET["numero"]) ? $_GET["numero"] : null;
    
    // Tutti i caratteri
    $caratteri = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), array('@', '#', '$', '%', '&', '*'));
    
    
    
    // Mescola l'array in modo casuale
    $caratteri_mischiati = str_shuffle(implode('', $caratteri));
    
    
    // Creo un if e controllo se funziona
    if((isset($numero) && $numero < 3)){
        $password_generata="Numero inserito non valido, inserisci un numero maggiore o uguale a 3";
    }
    else if(isset($_GET["numero"]) ? $_GET["numero"] : null){
        $password_generata = substr("$caratteri_mischiati", 0, $numero);
    }
    else{
        $password_generata = "Crea la tua password";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-3">
                    <h1>Password Generator</h1>
                </div>
                <div class="col-6">
                    <form action="./index.php" method="GET">
                        <div class="col-12">
                            <input type="number" name="numero" id="numero" class="form-control" placeholder="Inserisci quanto deve essere lunga la password">
                        </div>
                        <div class="col-12 text-center my-2">
                            <button type="submit" class="btn btn-success">Genera password</button>
                        </div>
                    </form>
                    
                </div>
                <div class="col-6">
                    <h5>Inserisci la grandezza della password</h5>
                </div>

                <!-- Password -->
                <div class="col-12 text-center">
                    <h2><?php echo $password_generata ?></h2>
                </div>
            </div>
        </div>
        
    </body>
    </html>