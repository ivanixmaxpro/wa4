
<div class="header">
    <h4 class="title">Compra</h4>
</div>
<div class="row">
    <div class="container">
        <div class="card">
            <?php
            tablaTotAlbaransCompra($albaransCompra, $empresa);
            ?>
        </div>
        <a href="?ctl=albaraCompra&act=afegir" class="btn btn-primary"></span> Afegir Albara compra</a>
    </div>
</div>
<br/>
<h4 class="title">Venta</h4>
<div class="row">
    <div class="container">
        <div class="card">          
            <?php
            tablaTotAlbaransVenta($albaransVenta, $empresa);
            ?>
        </div>
        <a href="?ctl=albaraVenta&act=afegir" class="btn btn-primary"></span> Afegir Albara Venta</a>
    </div>
</div>
