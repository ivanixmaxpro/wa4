
<div class="card">
    <div class="header">
        <h4 class="title">Control</h4>
        <p class="category">llistat de control d'usuaris:</p>
    </div>
    <form action="?ctl=control&act=llista" method="post">
        <div class="form-group caixa">
            Cercar per Usuari:
            <?php
            mostrarSelectUsuaris($usuaris);
            ?>
            <button name="Submit" class="btn btn-primary">Buscar per usuari</button>
        </div>
    </form> 
    <?php tablaTotControlUsuaris($control, $empresa); ?>
</div>
</div>