<!-- Sección Hero -->
<article class="fullbar">
    <section class="hero2 article">
        <div class="container">
        <?= empty($title) ? $titulo : $title; ?>

<a rel="example_group"href="https://latinospc.com/images/latinospc.png"title="LAtinosPC"alt="LAPC">
<img src="https://latinospc.com/images/s_latinospc.webp" width="263" height="186" alt="image" class="fr" /></a>
				<?= empty($start) ? $empiezo : $start; ?>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="services">
        <div class="container">
        <?= empty($guarantee) ? $garantia : $guarantee; ?>
        </div>
    </section>

</article>