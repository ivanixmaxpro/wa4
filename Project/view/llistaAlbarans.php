
    <div class="header">
        <h4 class="title">Llista Albarans</h4>

    </div>
    <div class="row">
    <div class="container">
        <div class="card">


                <a href="?ctl=albaraCompra&act=afegir" class="btn btn-primary"></span> Afegir Albara compra</a>
                <p class="category">llistat compra:</p>
                <?php
                tablaTotAlbaransCompra($albaransCompra, $empresa);
                ?>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
    <div class="container">
        <div class="card">
                <a href="?ctl=albaraVenta&act=afegir" class="btn btn-primary"></span> Afegir Albara Venta</a>
                <p class="category">llistat venta:</p>
                <?php
                tablaTotAlbaransVenta($albaransVenta, $empresa);
                ?>

            </div>
    </div>
    </div>
