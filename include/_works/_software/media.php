<div class="blurb">
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
            <?= empty($digital) ? $digital[0] : $digital[0];?>
        </p>

        <div class="media-types media-card">
            <h3><?= empty($subTitle) ? $subTitulo[1] : $subTitle[1];?></h3>
            <div class="tech-grid">
                <a href="<?= empty($links) ? $enlaces['imagen'][0] : $links['core']['image'][0];?>" title="<?= empty($links) ? $enlaces['imagen'][0] : $links['core']['image'][1];?>"class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $core['imagen'][0] : $core['image'][0];?></div>
                    <strong><?= empty($core) ? $core['imagen'][1] : $core['image'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['audio'][0] : $links['core']['audio'][0];?>" title=" Media Types Audio" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $core['audio'][0] : $core['audio'][0];?></div>
                    <strong><?= empty($core) ? $core['audio'][1] : $core['audio'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['video'][0] : $links['core']['video'][0];?>" title="<?= empty($links) ? $enlaces['video'][0] : $links['core']['video'][1];?>" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $core['video'][0] : $core['video'][0];?></div>
                    <strong><?= empty($core) ? $core['video'][1] : $core['video'][1];?></strong>
                </a>
                <a href="<?= empty($links) ? $enlaces['texto'][0] : $links['core']['text'][0];?>" title="<?= empty($links) ? $enlaces['texto'][0] : $links['core']['text'][1];?>" class="tech-item">
                    <div class="media-icon"><?= empty($core) ? $core['text'][0] : $core['text'][0];?></div>
                    <strong><?= empty($core) ? $core['text'][1] : $core['text'][1];?></strong>
                </a>
            </div>
        </div>

        <div class="timeline">
            <h3><?= empty($subTitle) ? $subTitulo[2] : $subTitle[2];?></h3>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['40'][0] : $links['evolution']['40'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['40'][1] : $links['evolution']['40'][1];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['earlyDigitalComputing'][0];?></a>:</strong> <?= empty($core) ? $core['evolucion'][1] : $core['evolution']['earlyDigitalComputing'][1];?>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['60'][0] : $links['evolution']['60'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['60'][1] : $links['evolution']['60'][1];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['digitalAudioandStorage'][0];?></a>:</strong> <?= empty($core) ? $core['evolucion'][1] : $core['evolution']['digitalAudioandStorage'][1];?>
            </div>
            <div class="timeline-item">
                <strong><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['digitalImagesandVideo'][0];?>:</strong> <?= empty($core) ? $core['evolucion'][0] : $core['evolution']['digitalImagesandVideo'][1];?> <a href="<?= empty($links) ? $enlaces['evolucion']['80'][0] : $links['evolution']['80'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['80'][1] : $links['evolution']['80'][1];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['80'][0];?></a> <?= empty($core) ? $core['evolucion'][0] : $core['evolution']['80'][1];?> <a href="<?= empty($links) ? $enlaces['evolucion']['80'][1] : $links['evolution']['80'][2];?>" title="<?= empty($links) ? $enlaces['evolucion']['80'][1] : $links['evolution']['80'][3];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['80'][2];?></a>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['00'][0] : $links['evolution']['00'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['00'][1] : $links['evolution']['00'][1];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['00'][0];?></a>:</strong> <?= empty($core) ? $core['evolucion'][0] : $core['evolution']['00'][1];?>
            </div>
            <div class="timeline-item">
                <strong><a href="<?= empty($links) ? $enlaces['evolucion']['20'][0] : $links['evolution']['20'][0];?>" title="<?= empty($links) ? $enlaces['evolucion']['20'][1] : $links['evolution']['20'][1];?>"><?= empty($core) ? $core['evolucion'][0] : $core['evolution']['20'][0];?></a>:</strong> <?= empty($core) ? $core['evolucion'][0] : $core['evolution']['20'][1];?>
            </div>
        </div>

        <div class="media-formats media-card">
            <h3><?= empty($subTitle) ? $subTitulo[3] : $subTitle[3];?></h3>
            <div class="tech-grid">
                <a href="https://en.wikipedia.org/wiki/JPEG" title="JPEG" class="tech-item">JPG</a>
                <a href="https://en.wikipedia.org/wiki/PNG" title="PNG" class="tech-item">PNG</a>
                <a href="https://en.wikipedia.org/wiki/MP4_file_format" title="MP4" class="tech-item">MP4</a>
                <a href="https://en.wikipedia.org/wiki/MP3" title="MP3" class="tech-item">MP3</a>
                <a href="https://en.wikipedia.org/wiki/GIF" title="GIF" class="tech-item">GIF</a>
                <a href="https://en.wikipedia.org/wiki/WAV" title="WAV" class="tech-item">WAV</a>
                <a href="https://en.wikipedia.org/wiki/PDF" title="PDF" class="tech-item">PDF</a>
                <a href="https://en.wikipedia.org/wiki/SVG" title="SVG" class="tech-item">SVG</a>
            </div>
        </div>

        <div class="media-importance">
            <h3><?= empty($subTitle) ? $subTitulo[4] : $subTitle[4];?></h3>
            <p>Digital media has transformed how we communicate, learn, and entertain ourselves. It enables:</p>
            <ul>
                <li>Instant global communication</li>
                <li>Interactive learning experiences</li>
                <li>Creative expression and sharing</li>
                <li>Digital preservation of culture</li>
                <li>Cross-platform content delivery</li>
            </ul>
        </div>

        <blockquote class="expert-quote">
            <p>"Modern media comes in many different formats, including print media (books, magazines, newspapers),
                television, movies, video games, music, cell phones, various kinds of software, and the Internet."</p>
            <footer>— <cite><a href="https://www.mentalhelp.net/internet/types-of-media/">American Addiction Centers
                        Resource</a></cite></footer>
        </blockquote>

        <p class="learn-more">
            <a href="https://en.wikipedia.org/wiki/Media_type" class="reference-link">Learn more about
                Internet Media Types →</a>
        </p>
    </div>
</div>