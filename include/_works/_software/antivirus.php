<article class="hero4">
    <style>
    h2 {
        Padding-left: 20%;
    }
    </style>
    <div class=" fullbar">
        <div style="display:inline-block;">
            <a href="../#ps2">
                <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
            </a>
        </div>
        <p tabindex="0" class="selection"><?= $av[0]; ?><br /><br /><?= $av[1]; ?><br /><br /><?= $av[2];?></p>

        <section tabindex="0" class="selection">
            <p><strong><?= empty($history) ?$historia[0]: $history[0];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['oldDays'];?></p>
            <p><strong><?= empty($history) ?$historia[1]: $history[1];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['fromMto_M'];?></p>
            <p><strong><?= empty($history) ?$historia[2]: $history[2];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['wildWest'];?></p>
            <p><strong><?= empty($history) ?$historia[3]: $history[3];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['digitalCastle'];?></p>
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
                    <?= empty($tips) ? $consejos['_'] : $tips['safe']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[6] : $tips[6];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['updates']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[7] : $tips[7];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['passwords']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[8] : $tips[8];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['backup']; ?></p>
            </div>
        </section>
    </div><!-- /fullbar -->

    <div class="spacer">
        <hr />
    </div>
    <div class="blurb fullbar hero4">
        <h2><?= empty($features) ? $caracteristicas['_'] : $features['title'];?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($features) ? $caracteristicas['_'] : $features[0];?>:</strong>
                <?= empty($features) ? $caracteristicas['_'] : $features['real-time'];?></p>
            <p><strong><?= empty($features) ? $caracteristicas['_'] : $features[1];?>:</strong>
                <?= empty($features) ? $caracteristicas['_'] : $features['firewall']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas['_'] : $features[2];?>:</strong>
                <?= empty($features) ? $caracteristicas['_'] : $features['phishing-protection']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas['_'] : $features[3];?>:</strong>
                <?= empty($features) ? $caracteristicas['_'] : $features['ransomware-protection']; ?></p>
            <p><strong><?= empty($features) ? $caracteristicas['_'] : $features[4];?>:</strong>
                <?= empty($features) ? $caracteristicas['_'] : $features['performance']; ?></p>
        </section>

        <h2><?= empty($questions) ? $preguntas['_'] : $questions['title']; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($questions) ? $preguntas[0] : $questions[0];?></strong>
                <?= empty($questions) ? $preguntas['avPagado'] : $questions['paidAv']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[1] : $questions[1];?></strong>
                <?= empty($questions) ? $preguntas['beneficios'] : $questions['benefits']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[2] : $questions[2];?></strong>
                <?= empty($questions) ? $preguntas['costo'] : $questions['cost']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[3] : $questions[3];?></strong>
                <?= empty($questions) ? $preguntas['vpn'] : $questions['vpn']; ?></p>
            <p><strong><?= empty($questions) ? $preguntas[4] : $questions[4];?></strong>
                <?= empty($questions) ? $preguntas['incorporado'] : $questions['built-in']; ?></p>
        </section>
    </div>
</article>