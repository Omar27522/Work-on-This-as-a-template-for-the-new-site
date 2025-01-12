<article class="hero4">
    <div class="fullbar">
    <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
    <?php //BreadCrumbs
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/multimedia/") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }
                ?>
    <h2><?= empty($subTitle) ? $subTitulo[0] : $subTitle[0];?></h2>

    <div tabindex="0" class="selection">
        <!-- Stats Section -->
        <div class="stats-grid">
            <?php
            $sections = [
                'multimediaFormatos' => 'mediaFormats',
                'internetUsuarios' => 'internetUsers',
                'video' => 'video'
            ];

            foreach ($sections as $spanishKey => $englishKey) :
                $linkKey = empty($links) ? $enlaces[$spanishKey] : $links[$englishKey];
                $statKey = empty($stats) ? $estadisticas[$spanishKey] : $stats[$englishKey];
            ?>
                <a class="stat-card" href="<?= $linkKey[0] ?>" title="<?= $linkKey[1] ?>">
                    <div class="stat-number"><?= $statKey[0] ?></div>
                    <div class="stat-label"><?= $statKey[1] ?></div>
                </a>
            <?php
            endforeach;
            ?>
        </div>

        <p>
            <?= $digital[0];?>
        </p>

        <div class="media-types media-card">
            <h3><?= empty($subTitle) ? $subTitulo[1] : $subTitle[1];?></h3>
            <div class="tech-grid">
                <a href="<?= empty($links) ? $enlaces['centro']['imagen'][0] : $links['core']['image'][0];?>" title="<?= empty($links) ? $enlaces['centro']['imagen'][1] : $links['core']['image'][1];?>"class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $centro['imagen'][0] : $core['image'][0];?></div>
                    <strong><?= empty($core) ? $centro['imagen'][1] : $core['image'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['centro']['audio'][0] : $links['core']['audio'][0];?>" title="<?= empty($links) ? $enlaces['centro']['audio'][1] : $links['core']['audio'][1];?>" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $centro['audio'][0] : $core['audio'][0];?></div>
                    <strong><?= empty($core) ? $centro['audio'][1] : $core['audio'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['video'][0] : $links['core']['video'][0];?>" title="<?= empty($links) ? $enlaces['centro']['video'][1] : $links['core']['video'][1];?>" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $centro['video'][0] : $core['video'][0];?></div>
                    <strong><?= empty($core) ? $centro['video'][1] : $core['video'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['centro']['texto'][0] : $links['core']['text'][0];?>" title="<?= empty($links) ? $enlaces['centro']['texto'][1] : $links['core']['text'][1];?>" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $centro['texto'][0] : $core['text'][0];?></div>
                    <strong><?= empty($core) ? $centro['texto'][1] : $core['text'][1];?></strong>
                </a>
            </div>
        </div>

        <div class="timeline">
            <h3><?= empty($subTitle) ? $subTitulo[2] : $subTitle[2];?></h3>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['40'][0] : $links['evolution']['40'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['40'][1] : $links['evolution']['40'][1];?>"><?= empty($core) ? $centro['evolucion']['computacionDigitalTemprana'][0] : $core['evolution']['earlyDigitalComputing'][0];?></a>:</strong> <?= empty($core) ? $centro['evolucion']['computacionDigitalTemprana'][1] : $core['evolution']['earlyDigitalComputing'][1];?>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['60'][0] : $links['evolution']['60'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['60'][1] : $links['evolution']['60'][1];?>"><?= empty($core) ? $centro['evolucion']['audioyAlmacenamientoDigital'][0] : $core['evolution']['digitalAudioandStorage'][0];?></a>:</strong> <?= empty($core) ? $centro['evolucion']['audioyAlmacenamientoDigital'][1] : $core['evolution']['digitalAudioandStorage'][1];?>
            </div>
            <div class="timeline-item">
                <strong><?= empty($core) ? $centro['evolucion']['imageneyVideoDigital'][0] : $core['evolution']['digitalImagesandVideo'][0];?>:</strong> <?= empty($core) ? $centro['evolucion']['imageneyVideoDigital'][1] : $core['evolution']['digitalImagesandVideo'][1];?> <a href="<?= empty($links) ? $enlaces['evolucion']['80'][0] : $links['evolution']['80'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['80'][1] : $links['evolution']['80'][1];?>"><?= empty($core) ? $centro['evolucion']['80'][0] : $core['evolution']['80'][0];?></a> <?= empty($core) ? $centro['evolucion']['80'][1] : $core['evolution']['80'][1];?> <a href="<?= empty($links) ? $enlaces['evolucion']['80'][2] : $links['evolution']['80'][2];?>" title="<?= empty($links) ? $enlaces['evolucion']['80'][3] : $links['evolution']['80'][3];?>"><?= empty($core) ? $centro['evolucion']['80'][2] : $core['evolution']['80'][2];?></a>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['00'][0] : $links['evolution']['00'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['00'][1] : $links['evolution']['00'][1];?>"><?= empty($core) ? $centro['evolucion']['00'][0] : $core['evolution']['00'][0];?></a>:</strong> <?= empty($core) ? $centro['evolucion']['00'][1] : $core['evolution']['00'][1];?>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['20'][0] : $links['evolution']['20'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['20'][1] : $links['evolution']['20'][1];?>"><?= empty($core) ? $centro['evolucion']['20'][0] : $core['evolution']['20'][0];?></a>:</strong> <?= empty($core) ? $centro['evolucion']['20'][1] : $core['evolution']['20'][1];?>
            </div>
        </div>

        <div class="media-formats media-card">
            <h3><?= empty($subTitle) ? $subTitulo[3] : $subTitle[3];?></h3>
            <div class="tech-grid">
                <a href="<?= empty($links) ? $enlaces['formatos']['jpg'][0] : $links['popularMediaFormats']['jpg'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['jpg'][1] : $links['popularMediaFormats']['jpg'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[0] : $popularMediaFormats[0]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['png'][0] : $links['popularMediaFormats']['png'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['png'][1] : $links['popularMediaFormats']['png'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[1] : $popularMediaFormats[1]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['mp4'][0] : $links['popularMediaFormats']['mp4'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['mp4'][1] : $links['popularMediaFormats']['mp4'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[2] : $popularMediaFormats[2]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['mp3'][0] : $links['popularMediaFormats']['mp3'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['mp3'][1] : $links['popularMediaFormats']['mp3'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[3] : $popularMediaFormats[3]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['gif'][0] : $links['popularMediaFormats']['gif'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['gif'][1] : $links['popularMediaFormats']['gif'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[4] : $popularMediaFormats[4]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['wav'][0] : $links['popularMediaFormats']['wav'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['wav'][1] : $links['popularMediaFormats']['wav'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[5] : $popularMediaFormats[5]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['pdf'][0] : $links['popularMediaFormats']['pdf'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['pdf'][1] : $links['popularMediaFormats']['pdf'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[6] : $popularMediaFormats[6]; ?></a>
                <a href="<?= empty($links) ? $enlaces['formatos']['svg'][0] : $links['popularMediaFormats']['svg'][0];?>" title="<?= empty($links) ? $enlaces['formatos']['svg'][1] : $links['popularMediaFormats']['svg'][1];?>" class="tech-item"><?= empty($popularMediaFormats) ? $formatos[7] : $popularMediaFormats[7]; ?></a>
            </div>
        </div>

        <div class="media-importance">
            <h3><?= empty($subTitle) ? $subTitulo[4] : $subTitle[4];?></h3>
            <p><?= empty($role) ? $rol[0] : $role[0];?><br><b><?= empty($role) ? $rol[1] : $role[1];?></b></p>
            <ul>
                <li><?= empty($role) ? $rol[2] : $role[2];?></li>
                <li><?= empty($role) ? $rol[3] : $role[3];?></li>
                <li><?= empty($role) ? $rol[4] : $role[4];?></li>
                <li><?= empty($role) ? $rol[5] : $role[5];?></li>
                <li><?= empty($role) ? $rol[6] : $role[6];?></li>
            </ul>
        </div>

        <blockquote class="expert-quote">
            <p><?= empty($modernMedia) ? $multimediaModerna['cita'] : $modernMedia['quote'];?></p>
            <footer>— <cite><a href="<?= empty($links) ? $enlaces['aACR'][0] : $links['aACR'][0]; ?>"><?= empty($modernMedia) ? $multimediaModerna['aACR'] : $modernMedia['aACR'];?></a></cite></footer>
        </blockquote>

        <p class="learn-more">
            <a href="<?= empty($links) ? $enlaces['tiposMultimedia'] : $links['mediaType'];?>" class="reference-link"><?= empty($learn) ? $aprender[0] : $learn[0];?></a>
        </p>
    </div>
</div>
</article>