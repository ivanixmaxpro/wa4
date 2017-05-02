<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="view/images/sidebar-5.jpg">

            <!--
    
                Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                Tip 2: you can also add an image using data-image tag
    
            -->

            <div class="sidebar-wrapper">
                <div class="logo simple-text">
                    WA4
                </div>

                <ul class="nav">
                    <li <?php if ($ctl == "home") {echo 'class="active"';} ?>>
                        <a href="?ctl=home">
                            <i class="pe-7s-graph"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li <?php if ($ctl == "empleat" && $act == "detall") {echo 'class="active"';} ?>>
                        <a href="?ctl=empleat&act=detall&id=<?php echo $_SESSION["id_empleat"]?>">
                            <i class="pe-7s-user"></i>
                            <p>Empleat</p>
                        </a>
                    </li>
                    <li <?php if ($ctl == "empleat" && $act == "llista") {echo 'class="active"';} ?>>
                        <a href="?ctl=empleat&act=llista">
                            <i class="pe-7s-id"></i>
                            <p>Llista empleats</p>
                        </a>
                    </li>
                    <li>
                        <a href="?ctl=empleat&act=fitxar">
                            <i class="pe-7s-power"></i>
                            <p>Fitxar</p>
                        </a>
                    </li>
                    <li>
                        <a href="?ctl=producte&act=llista">
                            <i class="pe-7s-news-paper"></i>
                            <p>Llistat de productes</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="pe-7s-science"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="?ctl=missatge&act=llistaMissatges">
                            <i class="pe-7s-bell"></i>
                            <p>Missatges</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

