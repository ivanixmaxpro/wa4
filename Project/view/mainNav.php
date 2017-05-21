<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?ctl=home"><?php echo ucwords($title); ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a>
                            <p>
                                <?php
                                if (isset($_SESSION["usuari"])) {
                                    echo "Benvingut, " . ucwords($_SESSION["usuari"]);
                                } else {
                                    echo "No estás logejat, ERROR";
                                }
                                ?>
                            </p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>
                                Compte
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?ctl=login&act=canviar">Canviar contrasenya</a></li>
                            <li class="divider"></li>
                            <?php
                            if (isset($_SESSION["usuari"])) {
                                echo "<li><a href='?ctl=logout'>Tanca sessió</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>
    <body>

    <div class="wrapper">
        <div class="content">
            <div class="container-fluid up-space">