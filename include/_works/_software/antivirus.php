<article class="hero4">
    <style>
    h2 {
        Padding-left: 20%;
    }
    </style>
    <div class=" fullbar">
        <div style="display:inline-block;">
            <a href="./#software">
                <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
            </a>
        </div>
        <style>
        .crumbs {
            /* The Whole Nav*/
            color: rgb(3, 49, 33);
            font-size: 16px;
            text-align: right;
        }

        .crumbs li {
            /* Every Item on the nav*/
            display: inline-block;
        }

        .crumbs li a:hover {
            color: rgb(0, 255, 166);
            text-decoration-line: overline;
        }

        .crumbs li a {
            /* Every Item on the nav that is a link*/
            text-decoration-line: none;
        }

        .crumbs li::after {
            /* The separator between the items*/
            content: " ➪";
        }

        .crumbs li:last-child::after {
            /* The separator between the items*/
            content: "";
        }

        .crumbs .active {
            /* The item that is active most of the time it will not be a link */
            color: red;
        }
        </style>

        
       
            <form id="myForm" action="./antivirus" method="get">
                <nav class="crumbs">
                    <ul>
                        <li><a href="./#software">Home</a></li>
                        <li>MLWC</li>
                        <li class="active">Dev Tools</li>
                        <li> <select id="programs">
                                <option>Anti-Virus</option>
                                <option>Malware Cleaners</option>
                                <option>Web Browsers</option>
                                <option>Messaging</option>
                                <option>Media</option>
                                <option>Runtimes</option>
                                <option>Documents</option>
                                <option>File Sharing</option>
                                <option>Online Storage</option>
                                <option>Other</option>
                                <option>Utilities</option>
                                <option>Compression</option>
                                <option>Development Tools</option>
                            </select> </li> <input type="submit">
                    </ul>
                </nav>
            </form>

            <p tabindex="0" class="selection"><?= $av[0]; ?><br />
                <img src="" height="210" width="240" alt="First Image" class="rtl"
                    style="background-color: darkgray;color: whitesmoke;text-align: center;font-size: 2rem;">
                <br /><?= $av[1]; ?><br /><br /><?= $av[2];?>
            </p>

            <section tabindex="0" class="selection">
                <p><strong><?= empty($history) ?$historia[0]: $history[0];?>:</strong>
                    <?= empty($history) ?$historia['viejosTiempos']: $history['oldDays'];?></p>
                <p><strong><?= empty($history) ?$historia[1]: $history[1];?>:</strong>
                    <?= empty($history) ?$historia['de_M_a_M']: $history['fromMto_M'];?></p>
                <p><strong><?= empty($history) ?$historia[2]: $history[2];?>:</strong>
                    <?= empty($history) ?$historia['salvajeOeste']: $history['wildWest'];?></p>
                <img src="" height="300" width="500" alt="Second Image" class="fl"
                    style="background-color: darkcyan;color: whitesmoke;text-align: center;font-size: 2rem;">
                <p><strong><?= empty($history) ?$historia[3]: $history[3];?>:</strong>
                    <?= empty($history) ?$historia['castilloDigital']: $history['digitalCastle'];?></p>
            </section>

            <h2><?= empty($tips) ? $consejos['titulo'] : $tips['title'];?></h2>
            <section>
                <p class="colms2">
                    <span tabindex="0" class="selection_2">
                        <?= empty($tips) ? $consejos[0] : $tips[0];?></span>
                    <br /><br /><span tabindex="0" class="selection_2">
                        <?= empty($tips) ? $consejos[1] : $tips[1];?></span>
                    <br /><br /><span tabindex="0" class="selection_2">
                        <?= empty($tips) ? $consejos[2] : $tips[2];?></span>
                    <br /><br /><span tabindex="0" class="selection_2">
                        <?= empty($tips) ? $consejos[3] : $tips[3];?></span>
                    <br /><br /><span tabindex="0" class="selection_2">
                        <?= empty($tips) ? $consejos[4] : $tips[4];?></span>
                </p>
                <div tabindex="0" class="selection">
                    <p><strong><?= empty($tips) ? $consejos[5] : $tips[5];?>:</strong>
                        <?= empty($tips) ? $consejos['aSalvo'] : $tips['safe']; ?></p>
                    <img src="" height="315" width="440" alt="Second to Last Image" class="rtl"
                        style="background-color: burlywood;color: whitesmoke;text-align: center;font-size: 2rem;">
                    <p><strong><?= empty($tips) ? $consejos[6] : $tips[6];?>:</strong>
                        <?= empty($tips) ? $consejos['actualizaciones'] : $tips['updates']; ?></p>
                    <p><strong><?= empty($tips) ? $consejos[7] : $tips[7];?>:</strong>
                        <?= empty($tips) ? $consejos['contraseñas'] : $tips['passwords']; ?></p>
                    <p><strong><?= empty($tips) ? $consejos[8] : $tips[8];?>:</strong>
                        <?= empty($tips) ? $consejos['respaldo'] : $tips['backup']; ?></p>
                </div>
            </section>
    </div><!-- /fullbar -->

    <div class="spacer">
        <hr />
    </div>
    <div class="blurb fullbar hero4" style="margin-bottom: 0;">
        <h2><?= empty($features) ? $caracteristicas['titulo'] : $features['title'];?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($features) ? $caracteristicas[0] : $features[0];?>:</strong>
                <?= empty($features) ? $caracteristicas['tiempoReal'] : $features['realTime'];?></p>
            <p><strong><?= empty($features) ? $caracteristicas[1] : $features[1];?>:</strong>
                <?= empty($features) ? $caracteristicas['paredesCortaFuegos'] : $features['firewall']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas[2] : $features[2];?>:</strong>
                <?= empty($features) ? $caracteristicas['proteccionFraude'] : $features['phishingProtection']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas[3] : $features[3];?>:</strong>
                <?= empty($features) ? $caracteristicas['proteccionRescate'] : $features['ransomwareProtection']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas[4] : $features[4];?>:</strong>
                <?= empty($features) ? $caracteristicas['rendimiento'] : $features['performance']; ?></p>
        </section>

        <h2><?= empty($questions) ? $preguntas['titulo'] : $questions['title']; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($questions) ? $preguntas[0] : $questions[0];?></strong>
                <?= empty($questions) ? $preguntas['avPagado'] : $questions['paidAv']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[1] : $questions[1];?></strong>
                <?= empty($questions) ? $preguntas['beneficios'] : $questions['benefits']; ?></p>
            <img src="" height="150" width="250" alt="Last Image" class="fl"
                style="background-color: darkred;color: whitesmoke;text-align: center;font-size: 2rem;">
            <p><strong><?= empty($questions) ? $preguntas[2] : $questions[2];?></strong>
                <?= empty($questions) ? $preguntas['costo'] : $questions['cost']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[3] : $questions[3];?></strong>
                <?= empty($questions) ? $preguntas['vpn'] : $questions['vpn']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[4] : $questions[4];?></strong>
                <?= empty($questions) ? $preguntas['incorporado'] : $questions['builtIn']; ?></p>
        </section>
    </div>
</article>