<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="apple-touch-icon" sizes="57x57" href="view/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="view/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="view/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="view/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="view/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="view/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="view/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="view/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="view/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="view/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="view/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="view/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="view/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="view/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="view/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>WA4</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="view/css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core CSS     -->
        <link href="view/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="view/css/animate.min.css" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="view/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="view/css/demo.css" rel="stylesheet" />
        <!-- CSS JQueary Alerts Confirm-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
        <!-- CSS JQueary Paginator Tables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="view/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <!--   Core JS Files   -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="view/js/bootstrap.min.js" type="text/javascript"></script>
        <!--  Checkbox, Radio & Switch Plugins -->
        <script src="view/js/bootstrap-checkbox-radio-switch.js"></script>
        <!-- JS JQuery Alerts Confirm -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
        <!-- JS JQueary Paginator Tables -->
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="view/js/custom.js"></script>
        <?php
        if ($ctl == "albaraVenta" && $act == "afegir") {
            echo '<script src="view/js/albaraVenta.js"></script>';
        }
        ?>
        <?php
        if ($ctl == "albaraCompra" && $act == "afegir") {
            echo '<script src="view/js/albaraCompra.js"></script>';
        }
        ?>
        <?php
        if ($ctl == "ubicacio" && $act == "modificar") {
            echo '<script src="view/js/ubicacio.js"></script>';
        }
        ?>
        <script src="view/js/validacionsFormularis.js"></script>
        <script src="view/js/busquedaNom.js"></script>
        <!--  Charts Plugin -->
        <script src="view/js/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="view/js/bootstrap-notify.js"></script>
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
        <script src="view/js/light-bootstrap-dashboard.js"></script>
        <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
        <script src="view/js/demo.js"></script>

        <!--        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
        <link rel="stylesheet" type="text/css" href="view/css/wa4.css" />
    </head>