<style>
.box2{font-size: 24px; color:rgb(11, 184, 242);}</style>
<div class="fullbar hero4" id="article">
<h2 id="top"style="margin-top: 0px;"><a href="#scroll"><?= empty($titles) ? $titulos[0] : $titles[0]; ?></a>
<!-- Tittle goes here between the h2 tag -->
</h2>
<div><p class="container"><?= empty($intro) ? $introx[0] : $intro[0]; ?><br />

<h3 style="text-align: center"><?= empty($titles) ? $titulos[1] : $titles[1]; ?>:</h3></p>
<p>
<span class="box2"><?= empty($titles) ? $titulos[2] : $titles[2]; ?>:</span> <?= empty($intro) ? $introx['completo'] : $intro['full']; ?><br /><br />

<span class="box2"><?= empty($titles) ? $titulos[3] : $titles[3]; ?>:</span> <?= empty($intro) ? $introx['incremental'] : $intro['incremental']; ?><br /><br />

<span class="box2"><?= empty($titles) ? $titulos[4] : $titles[4]; ?>:</span> <?= empty($intro) ? $introx['diferencial'] : $intro['differential']; ?><br /><br />

<span class="box2"><?= empty($titles) ? $titulos[5] : $titles[5]; ?>:</span> <?= empty($intro) ? $introx['espejo'] : $intro['mirror']; ?><br /><br />

<?= empty($intro) ? $introx['outro'] : $intro['outro']; ?></p></div>

<div class="clr"></div>
<!-- Content goes here -->
<img src="https://latinospc.com/images/backup.png"  alt="usbbackup" class="fl"/>
<p>
<strong><a href="#onsite_b"><?= empty($titles) ? $titulos[6] : $titles[6]; ?></a></strong>
<?= empty($intro) ? $introx['en-sitio'][0] : $intro['onsite'][0]; ?></p>
<p>
<strong><a href="#offsite_b"><?= empty($titles) ? $titulos[7] : $titles[7]; ?></a></strong>
<?= empty($intro) ? $introx['fuera-de-sitio'][0] : $intro['offsite'][0]; ?></p>
<p>
<strong><a href="#online_b"><?= empty($titles) ? $titulos[8] : $titles[8]; ?></a></strong>
<?= empty($intro) ? $introx['nube'][0] : $intro['cloud'][0]; ?></p>
<div class="clr"></div>
<h2 id="onsite_b"><?= empty($titles) ? $titulos[9] : $titles[9]; ?></h2>
<div class="clr"></div><p>
<?= empty($intro) ? $introx['en-sitio'][1] : $intro['onsite'][1]; ?>
</p>
<h2 id="offsite_b"><?= empty($titles) ? $titulos[10] : $titles[10]; ?></h2>
<div class="clr"></div><p>
<?= empty($intro) ? $introx['fuera-de-sitio'][1] : $intro['offsite'][1]; ?>
</p>
<h2 id="online_b"><?= empty($titles) ? $titulos[11] : $titles[11]; ?></h2>
<div class="clr"></div><p>
<?= empty($intro) ? $introx['nube'][1] : $intro['cloud'][1]; ?>
</p>
<div class="clr"></div>
<a href="#top"><i class="fa fa-caret-square-o-up"><?= empty($titles) ? $titulos[12] : $titles[12]; ?></i></a>
</div>
