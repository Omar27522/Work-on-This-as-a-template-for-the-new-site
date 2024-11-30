<div class="hero4 fullbar">
    <h2 id="title"><?= empty($introduction) ? $introduccion['titulo'] : $introduction['title']; ?></h2>
    <?php //BreadCrumbs
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/mensajeria/") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }
                ?><br />
    <img class="rtl" style="background-color:black" height="45px" width=75px>

    <?php if (!empty($introduction) || !empty($introduccion)) :
         foreach ((!empty($introduction) ? $introduction['content'] : $introduccion['contenido']) as $paragraph) : ?>
    <p tabindex="0" class="selection"><?php echo $paragraph; ?></p>
    <?php endforeach;  endif; ?>

    <p tabindex="0" class="selection"><a
            href="<?= empty($introduction) ? $introduccion['wiki_link'] : $introduction['wiki_link']; ?>">Wikipedia</a>
    </p>
    <hr />
    <h2><?= empty($recent_apps) ? $apps_recientes['titulo'] : $recent_apps['title']; ?></h2>
    <ul class="newspaper2">

        <?php   if(!empty($recent_apps) || !empty($apps_recientes)) :
        foreach ((!empty($recent_apps) ? $recent_apps['apps'] : $apps_recientes['apps']) as $app): ?>
        <li><?php echo $app; ?></li>
        <?php   endforeach; endif; ?>

    </ul>
    <h2><?= empty($recent_apps) ? $apps_recientes['titulo_seguridad'] : $recent_apps['security_title']; ?></h2>
    <p tabindex="0" class="selection">
        <?= empty($recent_apps) ? $apps_recientes['contenido_seguridad'] : $recent_apps['security_content']; ?></p>
    <hr />
    <h2><?= empty($advanced_features) ? $rasgos_avanzados['titulo'] : $advanced_features['title']; ?></h2>
    <p tabindex="0" class="selection">
        <?= empty($advanced_features) ? $rasgos_avanzados['intro'] : $advanced_features['intro']; ?></p>
    <ul class="newspaper2">

        <?php if (!empty($advanced_features) || !empty($rasgos_avanzados)) :
        foreach ((!empty($advanced_features) ? $advanced_features['features'] : $rasgos_avanzados['rasgos']) as $feature) : ?>
        <li><?php echo $feature; ?></li>
        <?php endforeach; endif; ?>
    </ul>
    <hr />
    <h2><?= empty($future_trends) ? $tendencias_futuras['titulo'] : $future_trends['title']; ?></h2>
    <p tabindex="0" class="selection">
        <?= empty($future_trends) ? $tendencias_futuras['contenido'] : $future_trends['content']; ?></p>
    <hr />
    <p tabindex="0" class="selection">
        <?= empty($market_stats) ? $estadisticas_mercado['contenido'] : $market_stats['content']; ?></p>
    <hr />
    <ul class="newspaper2 lastItem">
        <?php if (!empty($additional_apps) || !empty($apps_adicionales)) :
        foreach (!empty($additional_apps) ? $additional_apps['apps'] : $apps_adicionales['apps'] as $app) : ?>
        <li><?php echo $app; ?></li>
        <?php endforeach; endif; ?>
    </ul>
</div>