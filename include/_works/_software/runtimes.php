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
                    <li><strong><?= empty($devicePower) ? $dispositivoPotencia['desktop'][0] : $devicePower['desktop'][0]; ?></strong><?= empty($devicePower) ? $dispositivoPotencia['desktop'][1] : $devicePower['desktop'][1]; ?></li>
                    <li><strong><?= empty($devicePower) ? $dispositivoPotencia['laptop'][0] : $devicePower['laptop'][0]; ?></strong> <?= empty($devicePower) ? $dispositivoPotencia['laptop'][1] : $devicePower['laptop'][1]; ?></li>
                    <li><strong><?= empty($devicePower) ? $dispositivoPotencia['mobile'][0] : $devicePower['mobile'][0]; ?></strong> <?= empty($devicePower) ? $dispositivoPotencia['mobile'][1] : $devicePower['mobile'][1]; ?></li>
                </ul>

                <div class="future-section">
                    <h3><?= empty($future) ? $futuro[0] : $future[0]; ?></h3>
                    <p><?= empty($future) ? $futuro[1] : $future[1]; ?></p>
                </div>

                <div class="learn-more">
                    <h2>Want to Learn More?</h2>
                    <p>If you're curious about how computers work, runtime is just the beginning! You might also be
                        interested in:</p>
                    <ul>
                        <li>How programming languages work</li>
                        <li>What makes some computers faster than others</li>
                        <li>How games and apps are made</li>
                        <li>The latest in computer chip technology</li>
                    </ul>
                </div>

                <div class="pro-tip">
                    <h3>💡 Pro Tips for Better Runtime Performance</h3>
                    <ul>
                        <li>Keep your device's operating system updated</li>
                        <li>Close apps you're not using</li>
                        <li>Make sure you have enough free storage space</li>
                        <li>Choose apps that match your device's capabilities</li>
                    </ul>
                </div>

                <div class="references">
                    <h3>Want to Dive Deeper?</h3>
                    <ul>
                        <li><a href="https://www.techtarget.com/searchsoftwarequality/definition/runtime">Understanding
                                Runtime (Technical Details)</a></li>
                        <li>Check out our other articles about computer basics and advanced topics!</li>
                    </ul>
                </div>
        </div>
    </div>
</article>