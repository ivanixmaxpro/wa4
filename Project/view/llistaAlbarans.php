
<div class="header">
    
</div>
<div class="row">
    
    <div class="container">
        <h4 class="title">Compra</h4>
        <div class="card">
            <?php
            tablaTotAlbaransCompra($albaransCompra, $empresa);
            ?>
        </div>
        <?php
        if(isset($_SESSION['permisos']) && $_SESSION['permisos']['albaraCompra']->getCrear() == true ) {
            echo "<a href='?ctl=albaraCompra&act=afegir' class='btn btn-primary pull-right'></span> Afegir Albara compra</a>";
        }
        ?>
    </div>
</div>
<br/>

<div class="row">
    <div class="container">
        <h4 class="title">Venta</h4>
        <div class="card">          
            <?php
            tablaTotAlbaransVenta($albaransVenta, $empresa);
            ?>
        </div>
<?php
if(isset($_SESSION['permisos']) && $_SESSION['permisos']['albaraVenta']->getCrear() == true ) {
 echo "<a href=\"?ctl=albaraVenta&act=afegir\" class=\"btn btn-primary pull-right\"></span> Afegir Albara Venta</a>";
}
?>
    </div>
</div>
