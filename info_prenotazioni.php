<?php

$connessione = mysqli_connect('localhost', 'root', '', 'contatti');
// if($connessione) {
//     echo 'Sei connesso!';
// }
?>

<?php
$avviso = "";

if(isset($_POST['registrati'])) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $codice_fiscale = $_POST['codice_fiscale'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $numero = $_POST['numero'];

    
    if(!empty($nome) && !empty($cognome) && !empty($codice_fiscale) && !empty($email) && !empty($password) && !empty($numero)) {
        $emailPresente = true;
        $query = "SELECT * FROM utenti";
                $verificaEmail = mysqli_query($connessione, $query);
                while($row = mysqli_fetch_array($verificaEmail)) {
                    $dosi_somministrate = $row['email'];
                    if($email === $dosi_somministrate) {
                        $emailPresente = false;
                    }
                }  
        if($emailPresente==0) {
            die('Utente già registrato' . mysqli_error($connessione)); 
        }
        $query = "INSERT INTO utenti(nome, cognome, codice_fiscale, email, password, numero) VALUES ('{$nome}' , '{$cognome}', '{$codice_fiscale}', '{$email}', '{$password}', '{$numero}')";
        $creaUtenti = mysqli_query($connessione, $query);

        if(!$creaUtenti) {
            die('Query fallita' . mysqli_error($connessione));
        }
        $avviso = "Dati registrati con successo";
        echo $avviso;
    }
    else {
        $avviso = "I campi non devono essere vuoti!";
        echo $avviso;
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="style.css">
    <title>Registrazione</title>
</head>
<body>
    <div>
        <img src="Immagini/LogoRegione.jpg" alt="LogoRegione">
        <h2>Menu</h2>
        <hr>
        <table>
            <tr>
                <th><a href="homepage.php">Home</a></th>
                <th><a href="info_covid.php">Info Covid</a></th>
                <th><a href="info_vaccini.php">Info Vaccini</a></th>
                <th><a href="info_prenotazioni.php">Info prenotazioni</a></th>
            </tr>
        </table>
    </div>



    <form action="info_prenotazioni.php" method="post">            
        <div>
            <h2>Per prenotare la propria vaccinazione compila i campi sottostanti:</h2>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Inserisci il tuo nome">
            <br>
            <label>Cognome</label>
            <input type="text" name="cognome" placeholder="Inserisci il tuo cognome">
            <br>
            <label>Codice Fiscale</label>
            <input type="text" name="codice_fiscale" placeholder="Inserisci il tuo codice fiscale">
            <br>
            <label>Email</label>
            <input type="text" name="email" placeholder="Inserisci la tua mail">
            <br>
            <label>Password</label>
            <input type="text" name="password" placeholder="Scegli una password">
            <br>
            <label>Numero</label>
            <input type="text" name="numero" placeholder="Inserisci il tuo numero">
            <br>
            <input type="submit" value="Registrati" name="registrati">
        </div>
    </form>
</body>
</html>