
<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>
        <p class="category">A continuació un llistat:</p>
    </div>
    <form action="?ctl=producte&act=llista" method="post">
        <div class="form-group">
            Cercar per Nom:
            <input type="text" name="nom" >
            Conservar en fred:
            <select name="conservar">
                <option value="no">no</option>
                <option value="si">si</option>
            </select>
            Quantitat de registres:
            <select name="quantitat">
                <option value=" "> </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="72">72</option>
                <option value="100">100</option>
                <option value="200">200</option>
            </select>
            Tipus:
            <select name="tipus">
                <option value=" "> </option>
                <option value="solid">solid</option>
                <option value="semisolid">semisolid</option>
                <option value="liquid">liquid</option>
                <option value="gas">gas</option>
                <option value="altres">altres</option>
               
            </select>
            <button name="Submit" class="btn btn-primary">Buscar</button>
        </div>
    </form> 
    <?php

    switch ($tipus) {
    case "tots":
         tablaTot($productes);
        break;
    case "solid":
        tablaSolid($productes);
        break;
    case "semisolid":
        tablaSemiSolid($productes);
        break;
    case "liquid":
        tablaLiquid($productes);
        break;
    case "gas":
        tablasGas($productes);
        break;
    
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
    ?>

</div>