<article class="hero4 fullbar">
    <h2 id="title"><?= empty($titles) ? $titulos[0] : $titles[0];?></h2>
    <h2><span style="text-align:right;color:blue;">
            <!-- INDENT THE SECOND H2 -->
            <?= empty($titles) ? $titulos[1] : $titles[1];?>
        </span></h2>

    <p tabindex="0" class="selection"><?= $pc_webBrowsing[0];?></p>
    <img src="" alt="1st image" class="fl" style="background:red; height:400px;" height="200px">
    <p tabindex="0" class="selection"><?= $pc_webBrowsing[1];?></p>
    <hr />
    <h2><?= $subTitles[0];?></h2>

    <p><?= $subTitles[1];?></p>
    <h2 style="text-align:center;"><?= $subTitles[2];?></h2>
    <section class="colms2">

        <div class="selection">
            <h2><?= $subTitles[3];?></h2>
            <ul>
                <li><?= $pro_environment['summary'][0];?></li>
                <li><?= $pro_environment['summary'][1];?></li>
            </ul>
        </div>

        <div class="item selection">
            <h2><?= $subTitles[4];?></h2>
            <ul>
                <li><?= $pro_environment['summary'][2];?></li>
                <li><?= $pro_environment['summary'][3];?></li>
                <li><?= $pro_environment['summary'][4];?></li>
            </ul>
        </div>

        <div class="selection">
            <h2><?= $subTitles[5];?></h2>
            <ul>
                <li><?= $pro_environment['summary'][5];?></li>
                <li><?= $pro_environment['summary'][6];?></li>
                <li><?= $pro_environment['summary'][7];?></li>
            </ul>
        </div>

        <div class="selection">
            <h2><?= $subTitles[6];?></h2>
            <p><?= $pro_environment['summary'][8];?></p>
        </div>
    </section> <!-- colms2 -->
    <hr style="width:65%;">
    <h2 class="center"><?= $subTitles[7];?></h2>
    <section class="colms newspaper2">
        <?php foreach ($usecases as $key => $value) { ?>
        <fieldset>
            <legend><?= $key;?></legend> <?= $value;?>
        </fieldset>
        <?php } ?>
    </section>
    <hr style="width:65%;">
    <h2 class="center"><?= $subTitles[8];?></h2>
    <section class="colms2">
        <?php foreach ($profesionalEnvironment['summary'] as $index => $summary) {
            echo "<details>";
            echo "<summary class=\"selection_2\">";
            echo htmlspecialchars($summary);
            echo "</summary>";
            echo "<div class=\"pe\">";
            echo "<span tabindex=\"0\" class=\"selection_2\">";
            echo htmlspecialchars($profesionalEnvironment['detail'][$index]);
            echo "</span>";
            echo "</div>";
            echo "</details>"; } ?>
    </section>
    <hr style="width:65%;">
    <h2><?= $subTitles[9];?></h2>
   <section>
         <?php foreach ($wbInteraction as $key => $value) {
            $class = ($key === '11:00 PM') ? ' class="last"' : '';
        ?>
        <p<?= $class;?>><strong><?= $key;?>:</strong> <?= $value;?></p>
       <?php } ?>
    </section>
</article>
</article>
