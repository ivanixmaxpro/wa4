<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <header id="albaraCap" class="clearfix">
            <div id="company" class="clearfix">
                <div><?php echo $empresa->getNom(); ?></div>
            </div>
            <div id="project">
                <div><span>CLIENT</span> <?php echo $client->getNom(); ?></div>
                <div><span>LOCALITAT</span> <?php echo $albaraVentaComplet[0][0]->getLocalitat(); ?></div>
                <div><span>DATA</span> <?php echo $dataFormatada ?></div>
            </div>
        </header>
        <main>
            <?php taulaDetallsAlbarans($albaraVentaComplet[1], $empresa); ?>
            <tr>
                <td colspan="4" class="grand total">TOTAL</td>
                <td class="grand total"><?php echo round($albaraVentaComplet[0][0]->getPreu(), 2) . "€" ?></td>
            </tr>
            </tbody>
            </table>
    </div>
    <div id="notices">
        <div>OBSERVACIONS:</div>
        <div class="notice"><?php echo $albaraVentaComplet[0][0]->getObservacions(); ?></div>
    </div>
</main>
</div>
</div>
