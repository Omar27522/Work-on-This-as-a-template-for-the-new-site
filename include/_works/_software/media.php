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
            <!-- Stats Section --><div class="stats-grid">
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
            </div> <!-- Stats Section -->
            <p>
                <?= $digital[0];?>
            </p>
            <div class="media-types media-card">
                <h3><?= empty($subTitle) ? $subTitulo[1] : $subTitle[1];?></h3>
                <div class="tech-grid">
                    <a href="<?= empty($links) ? $enlaces['centro']['imagen'][0] : $links['core']['image'][0];?>"
                        title="<?= empty($links) ? $enlaces['centro']['imagen'][1] : $links['core']['image'][1];?>"
                        class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['imagen'][0] : $core['image'][0];?></div>
                        <strong><?= empty($core) ? $centro['imagen'][1] : $core['image'][1];?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['centro']['audio'][0] : $links['core']['audio'][0];?>"
                        title="<?= empty($links) ? $enlaces['centro']['audio'][1] : $links['core']['audio'][1];?>"
                        class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['audio'][0] : $core['audio'][0];?></div>
                        <strong><?= empty($core) ? $centro['audio'][1] : $core['audio'][1];?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['video'][0] : $links['core']['video'][0];?>"
                        title="<?= empty($links) ? $enlaces['centro']['video'][1] : $links['core']['video'][1];?>"
                        class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['video'][0] : $core['video'][0];?></div>
                        <strong><?= empty($core) ? $centro['video'][1] : $core['video'][1];?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['centro']['texto'][0] : $links['core']['text'][0];?>"
                        title="<?= empty($links) ? $enlaces['centro']['texto'][1] : $links['core']['text'][1];?>"
                        class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['texto'][0] : $core['text'][0];?></div>
                        <strong><?= empty($core) ? $centro['texto'][1] : $core['text'][1];?></strong>
                    </a>
                </div>
            </div>
            <div class="timeline">
                <h3><?= empty($subTitle) ? $subTitulo[2] : $subTitle[2]; ?></h3>
                <?php
    // Define the timeline data structure
    $timelineItems = [
        '40' => [
            'key' => 'computacionDigitalTemprana',
            'englishKey' => 'earlyDigitalComputing',
            'hasLink' => true,
            'specialFormat' => false
        ],
        '60' => [
            'key' => 'audioyAlmacenamientoDigital',
            'englishKey' => 'digitalAudioandStorage',
            'hasLink' => true,
            'specialFormat' => false
        ],
        '80' => [
            'key' => 'imageneyVideoDigital',
            'englishKey' => 'digitalImagesandVideo',
            'hasLink' => false,
            'specialFormat' => true
        ],
        '00' => [
            'key' => '00',
            'englishKey' => '00',
            'hasLink' => true,
            'specialFormat' => false
        ],
        '20' => [
            'key' => '20',
            'englishKey' => '20',
            'hasLink' => true,
            'specialFormat' => false
        ]
    ];
    foreach ($timelineItems as $decade => $item) :
        $baseKey = empty($core) ? $centro['evolucion'] : $core['evolution'];
        $linkBase = empty($links) ? $enlaces['evolucion'] : $links['evolution'];
        ?>
                <div class="timeline-item">
                    <?php if ($item['specialFormat']) { // Special case for 80s entry
             ?>
                    <strong><?= empty($core) ? $baseKey[$item['key']][0] : $core['evolution'][$item['englishKey']][0]; ?>:</strong>
                    <?= empty($core) ?$baseKey[$item['key']][1]: $core['evolution'][$item['englishKey']][1]; ?>
                    <a href="<?= $linkBase[$decade][0] ?>" title="<?= $linkBase[$decade][1] ?>">
                        <?= $baseKey[$decade][0] ?>
                    </a>
                    <?= $baseKey[$decade][1] ?>
                    <a href="<?= $linkBase[$decade][2] ?>" title="<?= $linkBase[$decade][3] ?>">
                        <?= $baseKey[$decade][2] ?>
                    </a>
                    <?php } else { // Standard format for other entries ?>
                    <strong>
                        <?php if ($item['hasLink']) { ?>
                        <a href="<?= $linkBase[$decade][0] ?>" title="<?= $linkBase[$decade][1] ?>">
                            <?php } ?>
                            <?= empty($core) ? $baseKey[$item['key']][0] : $core['evolution'][$item['englishKey']][0]; ?>
                            <?php if ($item['hasLink']) { ?>
                        </a>
                        <?php } ?>
                    </strong>:
                    <?= empty($core) ? $baseKey[$item['key']][1] : $core['evolution'][$item['englishKey']][1] ?>
                    <?php } ?>
                </div>
                <?php endforeach; ?>


            </div>
            <div class="media-formats media-card">
                <h3><?= empty($subTitle) ? $subTitulo[3] : $subTitle[3];?></h3>
                <div class="tech-grid">

                    <?php
    // Define the formats we want to display
    $formatTypes = ['jpg', 'png', 'mp4', 'mp3', 'gif', 'wav', 'pdf', 'svg'];
    foreach ($formatTypes as $index => $format) :
        $href = empty($links)
            ? $enlaces['formatos'][$format][0]
            : $links['popularMediaFormats'][$format][0];
        $title = empty($links)
            ? $enlaces['formatos'][$format][1]
            : $links['popularMediaFormats'][$format][1];
        $text = empty($popularMediaFormats)
            ? $formatos[$index]
            : $popularMediaFormats[$index];
        ?>
                    <a href="<?= $href ?>" title="<?= $title ?>" class="tech-item">
                        <?= $text ?>
                    </a>
                    <?php
    endforeach;
    ?>
                </div>
            </div>
            <div class="media-importance">
                <h3><?= empty($subTitle) ? $subTitulo[4] : $subTitle[4];?></h3>
                <p><?= empty($role) ? $rol[0] : $role[0];?><br><b><?= empty($role) ? $rol[1] : $role[1];?></b></p>
                <ul>
                    <?php for ($i = 2; $i < 7; $i++): ?>
                    <li><?= empty($role) ? $rol[$i] : $role[$i];?></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <blockquote class="expert-quote">
                <p><?= empty($modernMedia) ? $multimediaModerna['cita'] : $modernMedia['quote'];?></p>
                <footer>— <cite><a
                            href="<?= empty($links) ? $enlaces['aACR'][0] : $links['aACR'][0]; ?>"><?= empty($modernMedia) ? $multimediaModerna['aACR'] : $modernMedia['aACR'];?></a></cite>
                </footer>
            </blockquote>
            <p class="learn-more">
                <a href="<?= empty($links) ? $enlaces['tiposMultimedia'] : $links['mediaType'];?>"
                    class="reference-link"><?= empty($learn) ? $aprender[0] : $learn[0];?></a>
            </p>
        </div>
    </div>
</article>