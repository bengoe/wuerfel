<?php

$eins = 0;
$zwei = 0;
$drei = 0;
$vier = 0;
$fuenf = 0;
$sechs = 0;
wuerfeln($_POST['wieoft']);
function wuerfeln($rng){
    $rngn = $rng-1;
    $i=0;
    while ($i <= $rngn){
        $ehm = 333;
        global $eins, $zwei, $drei, $vier, $fuenf, $sechs;
        $augen = random_int(1, 6);
        if ($augen == 1){
            $eins++;
        }
        if ($augen == 2){
            $zwei++;
        }
        if ($augen == 3){
            $drei++;
        }
        if ($augen == 4){
            $vier++;
        }
        if ($augen == 5){
            $fuenf++;
        }
        if ($augen == 6){
            $sechs++;
        }
    $i++;
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>W&uuml;rfel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">W&uuml;rfel</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Start</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="https://bengoe.eu/imprint.php">Impressum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="https://github.com/bengoe/wuerfel">GitHub (Quellcode)</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">W&uuml;rfel</h2>
                <p class="text-center">Gebe im folgenden ein wie oft ein W&uuml;rfel geworfen werden soll:</p>
                <center>
                <form action="index.php?lsg=go" method="post">
                    <p><input type="number" name="wieoft" size="1"/></p>
                    <p><input type="submit" class="btn btn-primary"/></p>
                </form>
                <br> </br>
                <?php
                    if($_GET['lsg'] == "go"){
                        print("Es wurde " . $_POST['wieoft'] . " mal gew&uuml;rfelt und dies sind die Ergebnisse:");
                        print("<br />");
                        print("<table>
                        <tr>
                        <th>Augenzahl</th>
                        <th>Menge</th>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>".$eins."</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>".$zwei."</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>".$drei."</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>".$vier."</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>".$fuenf."</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>".$sechs."</td>
                        </tr>
                        </table>\r\n");


                    }
                ?>
                </center>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>