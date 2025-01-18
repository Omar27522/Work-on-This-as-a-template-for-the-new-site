<article class="hero4">
    <div class="content_resize">
        <div class="fullbar">
            <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>

            <?php /*BreadCrumbs*/
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/tiemposdeejecucion/") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }  /*BreadCrumbs*/ ?>

                <div class="highlight-box">
                    <p><?= empty($question) ? $pregunta : $question ?></p>
                </div>

                <h2><?= empty($title) ? $subtitulos[0] : $subtitles[0]; ?></h2>
                <p><?= empty($kitchen) ? $cocina[0] : $kitchen[0]; ?></p>
                <ul class="kitchen-analogy">
            <?php
                $activeArray = empty($kitchen) ? $cocina : $kitchen;
                $keys = empty($kitchen) ? ['chef', 'receta', 'ingredientes', 'herramientas'] : ['chef', 'recipe', 'ingredients', 'tools'];
                foreach ($keys as $key) :
                    echo '<li>';
                    echo $activeArray[$key][0] . ' '; // Article
                    echo '<strong>' . $activeArray[$key][1] . '</strong> '; // Parenthetical term
                    echo $activeArray[$key][2]; // Description
                    echo '</li>';
                endforeach;
            ?></ul><p><?=empty($kitchen) ? $cocina['justo'] : $kitchen['just']; ?></p>

                <h2><?= empty($title) ? $subtitulos[1] : $subtitles[1]; ?></h2>
                <p><?=empty($kitchen) ? $cocina['como'] : $kitchen['how']; ?></p>

                <div class="fun-fact">
                    <h3><?= empty($title) ? $subtitulos[2] : $subtitles[2]; ?></h3>
                    <p><?= empty($funFact) ? $datoCurioso : $funFact; ?></p>
                </div>

                <h2><?= empty($title) ? $subtitulos[3] : $subtitles[3]; ?></h2>
                <h3><?= empty($complexity) ? $complejidad[0] : $complexity[0]; ?></h3>
                <div class="highlight-box">
                    <p><?= empty($complexity) ? $complejidad[1] : $complexity[1]; ?></p>
                </div>

                <h3><?= empty($devicePower) ? $dispositivoPotencia[0] : $devicePower[0]; ?></h3>
                <p><?= empty($devicePower) ? $dispositivoPotencia[1] : $devicePower[1]; ?></p>

                    <ul class="device-list">
                        <?php $devices = ['desktop', 'laptop', 'mobile'];
                            foreach ($devices as $device) : ?>
                            <li>
                                <strong><?= empty($devicePower) ? $dispositivoPotencia[$device][0] : $devicePower[$device][0]; ?></strong>
                                <?= empty($devicePower) ? $dispositivoPotencia[$device][1] : $devicePower[$device][1]; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>


                <div class="future-section">
                    <h3><?= empty($future) ? $futuro[0] : $future[0]; ?></h3>
                    <p><?= empty($future) ? $futuro[1] : $future[1]; ?></p>
                </div>

                <div class="learn-more">
                    <h2><?= empty($learnMore) ? $aprendeMas[0] : $learnMore[0]; ?></h2>
                    <p><?= empty($learnMore) ? $aprendeMas[1] : $learnMore[1]; ?></p>
                    <ul>
                        <?php $learnMoreToShow = array_slice(empty($learnMore) ? $aprendeMas : $learnMore, 2);
                            foreach ($learnMoreToShow as $learn) : ?>
                            <li><?= $learn; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="pro-tip">
                    <h3><?= empty($proTips) ? $consejosPro[0] : $proTips[0]; ?></h3>
                    <ul>
                    <?php
                        $proTipsToShow = array_slice(empty($proTips) ? $consejosPro : $proTips, 1);
                        foreach ($proTipsToShow as $tip) : ?>
                            <li><?= $tip; ?></li>
                    <?php endforeach; ?>

                    </ul>
                </div>

                <div class="references">
                    <h3><?= empty($deepDive) ? $chapuzon[0] : $deepDive[0]; ?></h3>
                    <ul>
                        <li><?= empty($deepDive) ? $chapuzon[1] : $deepDive[1]; ?></li>
                        <li><?= empty($deepDive) ? $chapuzon[2] : $deepDive[2]; ?></li>
                    </ul>
                </div>
        </div>
    </div>
</article>