<article class="hero4 fullbar">
    <h2 id="title"><?= empty($titles) ? $titulos[0] : $titles[0];?></h2>
    <?php //BreadCrumbs
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/navegadoresweb/") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }
                ?>
    <h2><span style="text-align:right;color:blue;">
            <!-- INDENT THE SECOND H2 -->
            <?= empty($titles) ? $titulos[1] : $titles[1];?>
        </span></h2>

    <p tabindex="0" class="selection"><?= empty($pc_webBrowsing) ? $navegacionWeb_pc[0] : $pc_webBrowsing[0];?></p>
    <img tabindex="0" src="../../../tempimages/sath.jpg" style="background-color:rgb(178,34,34,.7);" alt="1st image" class="fl selection_2 card2" height="100%" width="10%">
    <p tabindex="0" class="selection"><?= empty($pc_webBrowsing) ? $navegacionWeb_pc[1] : $pc_webBrowsing[1];?></p>
    <hr />
    <h2><?= empty($subTitles) ? $subtitulos[0] : $subTitles[0];?></h2>

    <p><?= empty($subTitles) ? $subtitulos[1] : $subTitles[1];?></p>
    <h2 style="text-align:center;"><?= empty($subTitles) ? $subtitulos[2] : $subTitles[2];?></h2>
    <section class="colms2">

        <div class="selection">
            <h2><?= empty($subTitles) ? $subtitulos[3] : $subTitles[3];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][0] : $pro_environment['summary'][0];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][1] : $pro_environment['summary'][1];?></li>
            </ul>
        </div>

        <div class="item selection" style="margin-top: 79px;">
            <h2><?= empty($subTitles) ? $subtitulos[4] : $subTitles[4];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][2] : $pro_environment['summary'][2];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][3] : $pro_environment['summary'][3];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][4] : $pro_environment['summary'][4];?></li>
            </ul>
        </div>

        <div class="selection item">
            <h2><?= empty($subTitles) ? $subtitulos[5] : $subTitles[5];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][5] : $pro_environment['summary'][5];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][6] : $pro_environment['summary'][6];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][7] : $pro_environment['summary'][7];?></li>
            </ul>
        </div>

        <div class="selection">
            <h2><?= empty($subTitles) ? $subtitulos[6] : $subTitles[6];?></h2>
            <p><?= empty($pro_environment) ? $entornoProfesional['resumen'][8] : $pro_environment['summary'][8];?></p>
        </div>
    </section> <!-- colms2 -->
    <hr style="width:65%;">
    <h2 class="center"><?= empty($subTitles) ? $subtitulos[7] : $subTitles[7];?></h2>
    <section class="colms newspaper2">
    <?php
        $activeArr = !empty($usecases) ? $usecases : $casosDeUso;
        foreach ($activeArr as $key => $value) { ?>
            <fieldset>
                <legend><?= $key; ?></legend> <?= $value; ?>
            </fieldset>
    <?php }
?>
    </section>
    <hr style="width:65%;">
    <h2 class="center"><?= empty($subTitles) ? $subtitulos[8] : $subTitles[8];?></h2>
    <section class="colms2">
    <?php
        $environment = !empty($profesionalEnvironment) ? $profesionalEnvironment : $entornoPro;
        if (!empty($environment)) {
            foreach ($environment['summary'] as $index => $summary) { ?>
                <details>
                    <summary class="selection_2"><?= htmlspecialchars($summary); ?></summary>
                    <div class="pe">
                        <span tabindex="0" class="selection_2"><?= htmlspecialchars($environment['detail'][$index]); ?></span>
                    </div>
                </details>
            <?php }
        }
    ?>
    </section>
    <hr style="width:65%;">
    <h2><?= empty($subTitles) ? $subtitulos[9] : $subTitles[9];?></h2>
   <section>
         <?php
         $interaction = !empty($wbInteraction) ? $wbInteraction : $interaccionWeb;
         foreach ($interaction as $key => $value) {
            $class = ($key === '11:00 PM') ? ' class="last"' : '';
        ?>
        <p<?= $class;?>><strong><?= $key;?>:</strong> <?= $value;?></p>
       <?php } ?>
    </section>
</article>
