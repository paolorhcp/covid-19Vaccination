<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Riservata</title>
    <script type="text/javascript" src="function.js"></script>

 
</head>
<body>
    <h1>AREA RISERVATA</h1>
    <h3>Salve <?php echo $_SESSION['utente'];?> benvenuto/a nella tua area riservata</h3>
    <p>La tua vaccinazione è prevista per il giorno <script>dataVaccino()</script> con il vaccino <script>tipoVaccino()</script> </p>
    <a href="logout.php"><button type="button">Logout</button></a>
</body>
</html>