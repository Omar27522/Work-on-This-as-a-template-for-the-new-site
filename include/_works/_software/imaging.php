<article class="hero4">
    <div class="fullbar">
        <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
        <?php //BreadCrumbs
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/imagenes/") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }
                ?>
        <div class="colms2" style="padding-top: 1%;">
            <p class="selection item" tabindex="0">
                <span
                    style="font-size: larger;padding-left: 20px"><?= empty($sight) ? $vista[0] : $sight[0];?></span><br />
                <?= empty($sight) ? $vista[1] : $sight[1];?>
            </p>
            <p class="selection" tabindex="0">
                <?= empty($sight) ? $vista[2] : $sight[2];?></p>
        </div><!-- colms2 -->
        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[0] : $subTitles[0];?></h2>
        <p class="selection newspaper2" tabindex="0"><?= empty($evolution) ? $evolucion[0] : $evolution[0];?></p>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[1] : $subTitles[1];?></h2>
        <p class="selection" tabindex="0" style="font-size: x-large;">
            <?= empty($graphics2D) ? $graficos2D[0] : $graphics2D[0];?></p>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[2] : $subTitles[2];?></h2>
        <aside class="newspaper2">
            <p class="selection" tabindex="0" style="margin-top: 0;">
                <?= empty($graphics3D) ? $graficos3D['tercerD'] : $graphics3D['thirdD'];?>
            </p>
            <ul class="imgs item">
                <?php
                // Define the mapping of keys
                $items = [
                    ['es' => 'primer', 'en' => 'first'],
                    ['es' => 'segundo', 'en' => 'second'],
                    ['es' => 'tercer', 'en' => 'third'],
                    ['es' => 'cuarto', 'en' => 'fourth']
                ];

                // Generate the list items using foreach
                foreach ($items as $item) :
                    $key = empty($graphics3D) ? $item['es'] : $item['en'];
                    $value = empty($graphics3D) ? $graficos3D[$key] : $graphics3D[$key];
                ?>
                <li tabindex="0" class="d3"><?= $value ?></li>
                <?php endforeach; ?>

            </ul>
            <p class="selection" tabindex="0">
                <?= empty($graphics3D) ? $graficos3D['tercerDUltimo'] : $graphics3D['thirdDLast'];?></p>
        </aside>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[3] : $subTitles[3];?></h2>
        <p class="selection" tabindex="0" style="display: inline">
            <?= empty($digitalPhotography) ?$fotografiaDigital['foto'] : $digitalPhotography['photo'];?></p>
        <p><?= empty($digitalPhotography) ?$fotografiaDigital['incluye'] : $digitalPhotography['include'];?></p>
        <aside class="colms2">
            <div class="item">
                <h3 style="margin-top: 0;">
                    <?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['imagen'] : $digitalPhotography['sensor']['image'];?>
                </h3>
                <p class="selection" tabindex="0">
                    <?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['tipo'] : $digitalPhotography['sensor']['type'];?>
                </p>
                <ul class="imgs">
                    <?php
                    $sensorTypes = ['ccd' => 'ccd', 'cmos' => 'cmos'];
                    foreach ($sensorTypes as $es => $en) : ?>
                    <li class="blurb" tabindex="0">
                        <strong><?= empty($digitalPhotography) ? $fotografiaDigital['sensor'][$es]['fuerte'] : $digitalPhotography['sensor'][$en]['strong'];?></strong>
                        <?= empty($digitalPhotography) ? $fotografiaDigital['sensor'][$es]['pro'] : $digitalPhotography['sensor'][$en]['pro'];?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <p class="selection" tabindex="0">
                    <?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['sensores'] : $digitalPhotography['sensor']['sensors'];?>
                </p>
                <img src="<?=empty($images) ? $imagenes['girl'][0] : $images['girl'][0]; ?>" alt="Photographer"
                    style="width:100%;max-width:400px;margin-top:16px;">
            </div>
            <div class="item">
                <h3><?= empty($digitalPhotography) ? $fotografiaDigital['componentesClave'] : $digitalPhotography['keyComponents'];?>
                </h3>
                <p class="selection" tabindex="0">
                    <?= empty($digitalPhotography) ? $fotografiaDigital['elementos'] : $digitalPhotography['elements'];?>
                </p>
                <ul class="imgs">
                    <?php
                    $componentTypes = ['lente' => 'lens', 'procesador' => 'processor', 'resolucion' => 'resolution', 'rango' => 'range'];
                    foreach ($componentTypes as $es => $en) : ?>
                    <li><strong><?= empty($digitalPhotography) ? $fotografiaDigital['componentes'][$es][0] : $digitalPhotography['components'][$en][0];?></strong>
                        <?= empty($digitalPhotography) ? $fotografiaDigital['componentes'][$es][1] : $digitalPhotography['components'][$en][1];?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="item">
                <h3><?= empty($digitalProcessing) ? $procesamientoDigital['titulo'] : $digitalProcessing['title'];?>
                </h3>
                <p class="selection" tabindex="0">
                    <?= empty($digitalProcessing) ? $procesamientoDigital['intro'] : $digitalProcessing['intro'];?></p>
                <ul class="imgs">
                    <?php
                    $processSteps = ['raw' => 'raw', 'color' => 'color', 'ruido' => 'noise', 'compresion' => 'compression'];
                    foreach ($processSteps as $es => $en) : ?>
                    <li><strong><?= empty($digitalProcessing) ? $procesamientoDigital['pasos'][$es][0] : $digitalProcessing['steps'][$en][0];?></strong>
                        <?= empty($digitalProcessing) ? $procesamientoDigital['pasos'][$es][1] : $digitalProcessing['steps'][$en][1];?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[4] : $subTitles[4];?></h2>
        <p class="selection" tabindex="0">
            <?= empty($displayTech) ? $tecnologiaPantalla['intro'] : $displayTech['intro'];?></p>
        <aside class="colms2">
            <ul class="imgs">
                <?php
                $techTypes = ['refresco' => 'refresh', 'resolucion' => 'resolution', 'hdr' => 'hdr', 'oled' => 'oled'];
                foreach ($techTypes as $es => $en) : ?>
                <li class="item spz d4" tabindex="0">
                    <strong><?= empty($displayTech) ? $tecnologiaPantalla['tecnologias'][$es]['titulo'] : $displayTech['technologies'][$en]['title'];?>:</strong>
                    <?= empty($displayTech) ? $tecnologiaPantalla['tecnologias'][$es]['descripcion'] : $displayTech['technologies'][$en]['description'];?>
                </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[5] : $subTitles[5];?></h2>
        <p class="selection" tabindex="0">
            <?= empty($immersiveTech) ? $tecnologiaInmersiva['intro'] : $immersiveTech['intro'];?></p>
        <aside class="colms2">
            <ul class="imgs">
                <?php
                $immersiveTypes = ['vr' => 'vr', 'ar' => 'ar', 'mr' => 'mr'];
                foreach ($immersiveTypes as $es => $en) : ?>
                <li class="item spz d4" tabindex="0">
                    <strong><?= empty($immersiveTech) ? $tecnologiaInmersiva['tecnologias'][$es]['titulo'] : $immersiveTech['technologies'][$en]['title'];?>:</strong>
                    <?= empty($immersiveTech) ? $tecnologiaInmersiva['tecnologias'][$es]['descripcion'] : $immersiveTech['technologies'][$en]['description'];?>
                </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <p class="selection" tabindex="0">
            <?= empty($immersiveTech) ? $tecnologiaInmersiva['conclusion'] : $immersiveTech['conclusion'];?></p>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[6] : $subTitles[6];?></h2>
        <p class="selection" tabindex="0">
            <?= empty($modernImaging) ? $imagenModerna['intro'] : $modernImaging['intro'];?></p>
        <aside class="colms2">
            <ul class="imgs">
                <?php
                $appTypes = ['medica' => 'medical', 'satelital' => 'satellite', 'ia' => 'ai'];
                foreach ($appTypes as $es => $en) : ?>
                <li class="item spz" tabindex="0">
                    <strong><?= empty($modernImaging) ? $imagenModerna['aplicaciones'][$es]['titulo'] : $modernImaging['applications'][$en]['title'];?>:</strong>
                    <?= empty($modernImaging) ? $imagenModerna['aplicaciones'][$es]['descripcion'] : $modernImaging['applications'][$en]['description'];?>
                </li>
                <?php endforeach; ?>
            </ul>
            <p class="selection item" tabindex="0" style="margin-top: 0;">
                <?= empty($modernImaging) ? $imagenModerna['conclusion'] : $modernImaging['conclusion'];?></p>
        </aside>

        <aside class="colms2" style="margin-top: 1%;">
            <div class="item">
                <h3 style="margin-top: 0;">
                    <?= empty($imageFormats) ? $formatosImagen['titulo'] : $imageFormats['title'];?></h3>
                <p class="selection" tabindex="0">
                    <?= empty($imageFormats) ? $formatosImagen['intro'] : $imageFormats['intro'];?></p>
            </div>

            <div class="item">
                <h3 style="text-align:center">
                    <?= empty($closingText) ? $textoCierre['titulo'] : $closingText['title'];?></h3>
                <p class="selection" tabindex="0" style="margin-bottom: 0;">
                    <?= empty($closingText) ? $textoCierre['texto'] : $closingText['text'];?></p>
            </div>
        </aside>
    </div>
</article>