<?php

$connessione = mysqli_connect('localhost', 'root', '', 'contatti');

// if($connessione) {
//     echo 'Sei connesso!' . '<br>';
// }
?>

<?php session_start();?>
<?php 
    if(isset($_POST['login'])) {
        echo "tutto ok!" . '<br>';
    } else {
    echo "qualcosa non va!";
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($connessione, $email);
    $password = mysqli_real_escape_string($connessione, $password);

    $query = "SELECT * FROM utenti WHERE email = '{$email}'";

    $trova_utente = mysqli_query($connessione, $query);

    if(!$trova_utente) {
        die('RICHIESTA FALLITA' . mysqli_error($connessione)); 
    }

    while($row = mysqli_fetch_array($trova_utente)) {
        $nomeUtente = $row['nome'];
        $cognomeUtente = $row['cognome'];
        $codice_fiscaleUtente = $row['codice_fiscale'];
        $emailUtente = $row['email'];
        $passwordUtente = $row['password'];
        $numeroUtente = $row['numero'];
    }

    if($email === $emailUtente && $password === $passwordUtente) {
        $_SESSION['utente'] = $nomeUtente;
        header('Location: area_riservata.php');
    } else {
        header('Location: homepage.php');
    }

?>