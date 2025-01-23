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
            <p class="selection" tabindex="0"><?= empty($graphics3D) ? $graficos3D['tercerD'] : $graphics3D['thirdD'];?>
            </p>
            <ul class="imgs item">
                <li tabindex="0" class="d3"><?= empty($graphics3D) ? $graficos3D['primer'] : $graphics3D['first'];?>
                </li>
                <li tabindex="0" class="d3"><?= empty($graphics3D) ? $graficos3D['segundo'] : $graphics3D['second'];?>
                </li>
                <li tabindex="0" class="d3"><?= empty($graphics3D) ? $graficos3D['tercer'] : $graphics3D['third'];?>
                </li>
                <li tabindex="0" class="d3"><?= empty($graphics3D) ? $graficos3D['cuarto'] : $graphics3D['fourth'];?>
                </li>
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
                    <li class="blurb" tabindex="0">
                        <strong><?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['ccd']['fuerte'] : $digitalPhotography['sensor']['ccd']['strong'];?></strong>
                        <?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['ccd']['pro'] : $digitalPhotography['sensor']['ccd']['pro'];?>
                    </li>
                    <li class="blurb" tabindex="0"><strong><?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['cmos']['fuerte'] : $digitalPhotography['sensor']['cmos']['strong'];?></strong>
                    <?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['cmos']['pro'] : $digitalPhotography['sensor']['cmos']['pro'];?></li>
                </ul>
                <p class="selection" tabindex="0"><?= empty($digitalPhotography) ?$fotografiaDigital['sensor']['sensores'] : $digitalPhotography['sensor']['sensors'];?></p>
                    <img src="<?=empty($images) ? $imagenes['girl'][0] : $images['girl'][0]; ?>"
                    alt="Photographer" style="width:100%;max-width:400px;margin-top:16px;">
            </div>
            <div class="item">
                <h3><?= empty($digitalPhotography) ? $fotografiaDigital['componentesClave'] : $digitalPhotography['keyComponents'];?></h3>
                <p class="selection" tabindex="0"><?= empty($digitalPhotography) ? $fotografiaDigital['elementos'] : $digitalPhotography['elements'];?></p>
                <ul class="imgs">
                    <li><strong><?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['lente'][0] : $digitalPhotography['components']['lens'][0];?></strong> 
                        <?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['lente'][1] : $digitalPhotography['components']['lens'][1];?></li>
                    <li><strong><?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['procesador'][0] : $digitalPhotography['components']['processor'][0];?></strong>
                        <?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['procesador'][1] : $digitalPhotography['components']['processor'][1];?></li>
                    <li><strong><?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['resolucion'][0] : $digitalPhotography['components']['resolution'][0];?></strong>
                        <?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['resolucion'][1] : $digitalPhotography['components']['resolution'][1];?></li>
                    <li><strong><?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['rango'][0] : $digitalPhotography['components']['range'][0];?></strong>
                        <?= empty($digitalPhotography) ? $fotografiaDigital['componentes']['rango'][1] : $digitalPhotography['components']['range'][1];?></li>
                </ul>
            </div>
            <div class="item">
                <h3><?= empty($digitalProcessing) ? $procesamientoDigital['titulo'] : $digitalProcessing['title'];?></h3>
                <p class="selection" tabindex="0"><?= empty($digitalProcessing) ? $procesamientoDigital['intro'] : $digitalProcessing['intro'];?></p>
                <ul class="imgs">
                    <li><strong><?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['raw'][0] : $digitalProcessing['steps']['raw'][0];?></strong> 
                        <?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['raw'][1] : $digitalProcessing['steps']['raw'][1];?></li>
                    <li><strong><?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['color'][0] : $digitalProcessing['steps']['color'][0];?></strong>
                        <?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['color'][1] : $digitalProcessing['steps']['color'][1];?></li>
                    <li><strong><?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['ruido'][0] : $digitalProcessing['steps']['noise'][0];?></strong>
                        <?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['ruido'][1] : $digitalProcessing['steps']['noise'][1];?></li>
                    <li><strong><?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['compresion'][0] : $digitalProcessing['steps']['compression'][0];?></strong>
                        <?= empty($digitalProcessing) ? $procesamientoDigital['pasos']['compresion'][1] : $digitalProcessing['steps']['compression'][1];?></li>
                </ul>
            </div>
        </aside>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[4] : $subTitles[4];?></h2>
        <p class="selection" tabindex="0">Today's display technology has evolved dramatically, offering unprecedented
            visual experiences:</p>
        <aside class="colms2">
            <ul class="imgs">
                <li class="item spz d4" tabindex="0"><strong>High Refresh Rates:</strong> Modern displays can achieve
                    144Hz, 240Hz, or even higher, providing smoother motion and reducing motion blur</li>
                <li class="item spz d4" tabindex="0"><strong>Resolution:</strong> From 4K (3840x2160) to 8K (7680x4320)
                    displays, offering incredibly detailed images</li>
                <li class="item spz d4" tabindex="0"><strong>HDR (High Dynamic Range):</strong> Enabling a wider range
                    of colors and brightness levels</li>
                <li class="item spz d4" tabindex="0"><strong>OLED and Mini-LED:</strong> Delivering deeper blacks and
                    better contrast ratios</li>
            </ul>
        </aside>


        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[5] : $subTitles[5];?></h2>
        <p class="selection" tabindex="0">The latest frontier in computer graphics involves immersive technologies:</p>
        <aside class="newspaper2">
            <ul class="imgs">
                <li class="d4" tabindex="0"><strong class="strong">Virtual Reality (VR):</strong> Creates fully
                    immersive 3D environments, using high-resolution displays, precise motion tracking, and
                    sophisticated controllers for interaction</li>
                <li class="d4" tabindex="0"><strong>Augmented Reality (AR):</strong> Overlays digital content onto the
                    real world, using cameras and sensors to blend virtual and physical spaces</li>
                <li class="d4" tabindex="0"><strong>Mixed Reality (MR):</strong> Combines elements of both VR and AR,
                    allowing virtual objects to interact with the physical environment</li>
            </ul>
        </aside>
        <p class="selection" tabindex="0">These technologies are revolutionizing fields from gaming and entertainment to
            education, healthcare, and industrial design.</p>

        <h2 class="eych8"><?= empty($subTitles) ? $subTitulos[6] : $subTitles[6];?></h2>
        <p class="selection" tabindex="0">While traditional computer displays work in 2 dimensions, modern technology
            has evolved to create and manipulate both 2D and 3D imagery. The computer makes complex calculations to
            represent or display images in various formats, from simple 2D representations to sophisticated 3D models.
            Today's imaging technology extends beyond mere display - computers can now materialize digital designs into
            physical objects through <a href="https://all3dp.com/2/3d-file-format-3d-model-types/">3D Printing
                technology</a>.</p>
        <aside class="colms2">
            <div class="item">
                <h3 style="margin-top: 0;">Common Image File Formats</h3>
                <p class="selection" tabindex="0">There are numerous image file formats, each designed for specific
                    uses. You can learn more about the major graphic file formats through this <a
                        href="https://en.wikipedia.org/wiki/Image_file_format#Major_graphic_file_formats">comprehensive
                        guide</a>.</p>
            </div>
            <div class="item">
                <h3 style="text-align:center">Further Exploration</h3>
                <p class="selection" tabindex="0" style="margin-bottom: 0;">The field of computer graphics and imaging
                    is vast and constantly evolving. We encourage you to explore topics like ray tracing, vector
                    graphics, raster images, color theory, and the latest developments in real-time rendering.
                    Understanding these concepts can provide deeper insights into how modern digital imaging works and
                    where the technology is headed.</p>
            </div>
        </aside>
    </div>
</article>