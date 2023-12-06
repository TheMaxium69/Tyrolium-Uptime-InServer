<?php

$TyroUptime_ips = [
    "localhost",
    "home.tyrolium.fr"
];

$TyroUptime_tag = "vps214";


if (!empty($_GET['uptime']) && $_GET['uptime'] == "1"){

    header('Access-Control-Allow-Origin: *');

    $msg = [
        "status" => "true",
        "time" => $_SERVER['REQUEST_TIME'],
        "host" => $_SERVER['HTTP_HOST']
    ];
    echo json_encode($msg);
    exit();

}


foreach ($TyroUptime_ips as $ip) {

    if ($_SERVER['HTTP_HOST'] == $ip) {
        CreateUptimePage($TyroUptime_tag);
        exit();
    }

}

function CreateUptimePage($tyrotag) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $tyrotag ?> - tyrolium</title>
    <link href="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="title" content="<?= $tyrotag ?> - tyrolium">
    <meta name="description" content="<?= $tyrotag ?> sur L'infrastructure réseau de Tyrolium"/>
    <meta property="og:title" content="<?= $tyrotag ?> - tyrolium"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://tyrolium.fr/uptime/"/>
    <meta property="og:image" content="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png"/>
    <meta property="og:description" content="<?= $tyrotag ?> sur L'infrastructure réseau de Tyrolium"/></head>
    <meta name="googlebot" content="noindex, nofollow">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg " data-bs-theme="dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="https://tyrolium.fr/Contenu/Image/Tyrolium%20Site.png" alt="Logo" width="30"  class="d-inline-block align-text-top">
                Tyrolium Uptime <span style="text-transform: uppercase" class="badge rounded-pill text-bg-primary"><?= $tyrotag ?></span>
            </a>
        </div>
    </nav>
</header>
<main>
    <div class="info-start">

        <p>
            <strong>A quoi sert ce site :</strong>

            vous pouvez consulter l'infractructur réseau de Tyrolium et ces fillaire, notamment SolidServ fillaire dans le domaine du serveur, mais aussi TyroServ, Gamenium et bien d'autre

        </p>
    </div>

    <div class="connected">

        <div class="textC">
            <h6>Vous êtes connecter au :</h6><br>
            <h1 style="text-transform: uppercase"><?= $tyrotag ?> de TYROLIUM</h1>
        </div>
        <a href="https://tyrolium.fr/uptime/">Plus d'information</a>

    </div>

</main>

<style>

    nav {
        background-color: #303030!important;
        border-bottom: 10px solid;
        border-color: #375a7f;
    }

    .info-start{
        margin: 40px;
        background-color: #303030;
    }

    .info-start p{

        border-left: solid #797979;
        padding: 42px;
    }

    .connected {
        text-align: center;
    }

    .connected .textC {

        margin: 0px 16%;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background-color: #303030;

    }

    .connected .textC h1 {
        font-size: 50px;
        color: #003fff;
        font-weight: 600;
    }

    .connected .textC h6 {
        font-size: 20px;
        color: #ffffff;
        margin-bottom: -24px;
    }

    .connected a {
        text-decoration: none;
        color: #ffffff;
        border-radius: 15px;
        padding: 10px 20px;
        background-color: #375a7f;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .connected a:hover {
        background-color: #507ba8;
        color: white;
    }


</style>


</body>
</html>

<?php } ?>
