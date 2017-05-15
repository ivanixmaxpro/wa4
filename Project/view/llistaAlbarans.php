<div class="card">
    <div class="header">
        <h4 class="title">Llista Albarans</h4>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 pull-left">
                <a href="?ctl=albaraCompra&act=afegir" class="btn btn-primary"></span> Afegir Albara compra</a>
                <p class="category">llistat compra:</p>
                <?php
                tablaTotAlbaransCompra($albaransCompra, $empresa);
                ?>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 pull-right">
                <a href="?ctl=albaraVenta&act=afegir" class="btn btn-primary"></span> Afegir Albara Venta</a>
                <p class="category">llistat venta:</p>
                <?php
                tablaTotAlbaransVenta($albaransVenta, $empresa);
                ?>

            </div>
        </div>
    </div>
</div>
