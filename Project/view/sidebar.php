<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="view/images/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo simple-text">
                    WA4
                </div>

                <ul class="nav">

                    <li <?php
                    if ($ctl == "home") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=home">
                            <i class="pe-7s-graph"></i>
                            <p>Inici</p>
                        </a>
                    </li>
                    <li <?php
                    if ($ctl == "empleat" && $act == "detall") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=empleat&act=detall&id=<?php echo $_SESSION["id_empleat"] ?>">
                            <i class="pe-7s-user"></i>
                            <p>Empleat</p>
                        </a>
                    </li>
                    <li
                        <?php if($_SESSION['permisos']['empleat']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){

                        ?>
                        <?php
                    if ($ctl == "empleat" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=empleat&act=llista">
                            <i class="pe-7s-id"></i>
                            <p>Llista d'empleats</p>
                        </a>
                    </li><?php } ?>
                    <li
                        <?php
                    if ($ctl == "empleat" && $act == "fitxar") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=empleat&act=fitxar">
                            <i class="pe-7s-power"></i>
                            <p>Fitxar</p>
                        </a>
                    </li>
                    <li
                        <?php if($_SESSION['permisos']['control']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){

                    if ($ctl == "control" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=control&act=llista">
                            <i class="pe-7s-bell"></i>
                            <p>Control Personal</p>
                        </a>
                    </li> <?php } ?>
                    <li
                        <?php if($_SESSION['permisos']['producte']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){

                    if ($ctl == "producte" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=producte&act=llista">
                            <i class="pe-7s-note2"></i>
                            <p>Llistat de productes</p>
                        </a>
                    </li><?php } ?>
                    <li
                        <?php if($_SESSION['permisos']['albaraCompra']->getVisualitzar() == 1 && isset($_SESSION['permisos']) && $_SESSION['permisos']['albaraVenta']->getVisualitzar() == 1){

                    if ($ctl == "albara" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=albara&act=llista">
                            <i class="pe-7s-news-paper"></i>
                            <p>Llistat d'Albarans</p>
                        </a>
                    </li> <?php } ?>

                    <li <?php
                        if($_SESSION['permisos']['client']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    if ($ctl == "client" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=client&act=llista">
                            <i class="pe-7s-users"></i>
                            <p>Llistat de clients</p>
                        </a>
                    </li> <?php } ?>
                    <li <?php
                        if($_SESSION['permisos']['proveidor']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    if ($ctl == "proveidor" && $act == "llista") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=proveidor&act=llista">
                            <i class="pe-7s-plugin"></i>
                            <p>Llistat de proveïdors</p>
                        </a>
                    </li><?php } ?>
                    <li <?php
                    if ($ctl == "missatge" && $act == "llistaMissatges") {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="?ctl=missatge&act=llista">
                            <i class="pe-7s-mail"></i>
                            <p>Missatges</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

