<?php

$connessione = mysqli_connect('localhost', 'root', '', 'vaccini');
// if($connessione) {
//     echo "Sei connesso";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Campagna vaccinale Campania</title>
    <link rel="stylesheet" type= "text/css" href="style.css">
    <script type="text/javascript" src="function.js"></script>
</head>

<body>
<div id="container">



    <div class="titolo">
        <div id="testoTitolo">
            <h1>Campagna di vaccinazione COVID-19 in Campania</h1>
        </div>
    </div>

    <hr>

    <div>
        <div id="logoRegHome">
            <img src="Immagini/LogoRegione.jpg" alt="LogoRegione" class="logoReg">
        </div>



        <div id="loginDiv">
            <form action="login.php" method="post">
                <fieldset>
                    <legend>Login e Registazione</legend>
                    <label>email</label>
                    <input type="text" name="email" class="mail" placeholder="Inserisci la tua email">
                    <br>
                    <label >password</label>
                    <input type="text" name="password" placeholder="Inserisci la password">
                    <br>
                    <input type="submit" name="login" value="Accedi" href="area_riservata.php">
                    oppure
                    <a href="info_prenotazioni.php"><button type="button">Registrati</button></a>
                </fieldset>
            </form>
        </div>



        <div style="clear:both"></div>

    </div>

    <hr>

    <div id="titMenu1">
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



    <div>
        <table>
            <caption>Vaccini disponibili</caption>
            <tr>
                <th>Dosi somministrate</th>
                <th>Dosi consegnate</th>
            </tr>
            <tbody>
                <?php 
                $query = "SELECT * FROM consegne";
                $consegne = mysqli_query($connessione, $query);
                while($row = mysqli_fetch_array($consegne)) {
                    $dosi_somministrate = $row['dosi_somministrate'];
                    $dosi_consegnate = $row['dosi_consegnate'];
                    echo "<tr>";
                    echo "<td>{$dosi_somministrate}</td>";
                    echo "<td>{$dosi_consegnate}</td>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <div>
        <table>
            <caption>Somministrazioni per categoria</caption>
            <tr>
                <th>Categoria</th>
                <th>Somministrazioni</th>
            </tr>
            <tbody>
                <?php 
                $query = "SELECT * FROM somm_categoria";
                $somm_cat = mysqli_query($connessione, $query);
                while($row = mysqli_fetch_array($somm_cat)) {
                $categoria = $row['categoria'];
                $somministrazioni = $row['somministrazioni'];
                echo "<tr>";
                echo "<td>{$categoria}</td>";
                echo "<td>{$somministrazioni}</td>";
                }
            
                ?>
            </tbody>
        </table>
    </div>



    <div>
        <table>
            <caption>Somministrazioni per fasce di età</caption>
            <tr>
                <th>Età</th>
                <th>Somministrazioni</th>
            </tr>
            <tbody>
                <?php 
                $query = "SELECT * FROM somm_eta";
                $somm_eta = mysqli_query($connessione, $query);
                while($row = mysqli_fetch_array($somm_eta)) {
                $eta = $row['eta'];
                $somministrazioni = $row['somministrazioni'];
                echo "<tr>";
                echo "<td>{$eta}</td>";
                echo "<td>{$somministrazioni}</td>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <div>
        <table>
            <tr>
                <th>
                    <a href="https://www.instagram.com/regione.campania/?hl=it"><img src="Immagini/ig.jpg" alt="instagram" width="40px" height="40px"></a>
                    <a href="https://twitter.com/reg_campania"><img src="Immagini/tw.png" alt="twitter" width="40px" height="40px" ></a>
                    <a href="https://www.facebook.com/RegCampania/"><img src="Immagini/fb.png" alt="facebook" width="40px" height="40px" ></a>
                </th>
            </tr>
        </table>
        
        <hr>
        <table>
            <tr>
                <th><a href="https://www.regione.campania.it/">Home</a></th>
                <th><a href="https://www.regione.campania.it/cittadini/it/la-tua-campania/servizi-af3a">Servizi</a></th>
                <th><input type="button" name="contReg" value="Contatti" onclick="mostraContatti()"></th> <!--APRIRE SCRIPT INDIRIZZI ECC-->
                <th><a href="https://www.regione.campania.it/regione/it/note-legali/note-legali">Note legali</a></th>
                <th><a href="https://www.regione.campania.it/regione/it/privacy/privacy">Privacy</a></th>
            </tr>
        </table>
    </div>
    
    
</div>
</body>
</html>