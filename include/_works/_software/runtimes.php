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

                <h3>2. Your Device's Power</h3>
                <p>Different devices have different capabilities:</p>
                <ul class="device-list">
                    <li>🖥️ <strong>Desktop Computers:</strong> Like a professional kitchen - lots of power and space
                    </li>
                    <li>💻 <strong>Laptops:</strong> Like a home kitchen - good for most tasks</li>
                    <li>📱 <strong>Mobile Devices:</strong> Like a food truck kitchen - smaller but surprisingly
                        capable!</li>
                </ul>

                <div class="future-section">
                    <h3>🚀 The Future is Exciting!</h3>
                    <p>Technology keeps getting better - imagine having the power of today's desktop computer in
                        tomorrow's
                        smartwatch! Companies like Apple, AMD, and Intel are constantly developing new ways to pack more
                        processing
                        power into smaller spaces.</p>
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