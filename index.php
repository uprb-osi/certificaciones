<?php
ini_set('display_errors', true);
echo '
<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Certificaciones UPR Bayamón</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>

<body class="homepage">
    <div id="page-wrapper">';

include_once("header.php");

if (isset($_GET['p']) && !empty($_GET['p'])) {
    switch ($_GET['p']) {
        case 'certificaciones':
            include_once("certificaciones/certificaciones.php");
            break;

        case 'microsoft':
            include_once("certificaciones/microsoft/microsoft.php");
            break;

        case 'microsoft-mos-word':
            include_once("certificaciones/microsoft/mos/microsoft-mos-word.php");
            break;
        case 'microsoft-mos-excel':
            include_once("certificaciones/microsoft/mos/microsoft-mos-excel.php");
            break;
        case 'microsoft-mos-access':
            include_once("certificaciones/microsoft/mos/microsoft-mos-access.php");
            break;
            
        
        case 'galeria':
            include_once("galeria.php");
            break;

        default:
            include_once("inicio.php");
            break;
    }
} else {
    include_once("inicio.php");
}

include_once("footer.php");

echo'
    </div> <!-- id="page-wrapper" -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>
';