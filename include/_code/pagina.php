<!DOCTYPE html>
<html lang="es">
<head><!-- Head de el documento -->
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <title><?= $titulo?></title>
    <link href="<?= $directoryPath ?>include/_code/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_works/start.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_code/nav.css" rel="stylesheet" type="text/css" />
    <script defer src="<?= $directoryPath ?>include/_code/script.js" ></script>
	<link rel="icon" href="<?= $directoryPath ?>annotation_2019_12_08_033413_AUw_2.ico">
  <?php if(!empty($palabrasClave) && !empty($descripción)){  echo $palabrasClave.$descripción;  } ?>
  <meta name="author" content="LAtinosPC">
</head><!--^^ Head de el documento ^^-->

<body><main class="main">
  <header class="header"><!-- Header -->
    <div class="header_resize">
            <div class="logo">
              <h1><a href="../"><span>LAtinos</span>PC.com<small>"PC" es por Computadora Personal
              </small></a></h1>
    </div>
            <div class="clr"></div>
    </div>
  </header><!--^^ Header ^^-->

<div class="hbg"><!-- HBG --><!-- nav bar -->
        <div class="hbg_resize">
               <nav class="menu_nav" id="scroll" >
            <ul>
            <li class="<?= $js="current dropdown"; ?>"><a class="dropbtn" onclick="myFunction()">Cristo Jesus</a>
                <div class="dropdown-content" id="myDropdown">
                <a href="https://latinospc.com" style="display: inline;background-image:none;background-color:#f9f9f9;"><?php
                $pictures= array('1','2','3','4','5','6','7','8','9','10','11','12');
                echo"<img src=\"https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb";
                for($i=0; $i<1; $i++){
                    shuffle($pictures);
                echo $pictures[$i];}
                echo".webp\" width=\"372px\" height=\"248px\" alt=\"Jesus Christ\" style=\"margin-top: 15px;margin-left:20px;\" class=\"image\"/>";
                ?></a>
                <div class="rtl"style="padding-top: 30px;padding-right:20px;"><a href="<?= $directoryPath ?>español/?respaldos">Respaldos</a>
                  <a href="<?= $directoryPath ?>español/software/programas/">Programas</a>
                  <a href="<?= $directoryPath ?>español/hardware/">Anatomía</a>
                  <a href="<?= $directoryPath ?>español/hardware/notebooks/">Notebooks</a>
                  <a href="<?= $directoryPath ?>español/hardware/cables/">Cables</a>
                </div>
                <a href="<?= $directoryPath ?>español/software/sitios/">Sitios Web</a>
                <a href="<?= $directoryPath ?>español/software/contraseñas/">Contraseñas</a>
                <a href="<?= $directoryPath ?>español/acerca/tutoriales/">Tutoriales</a>

                <a href="#Funciona !!!" style="float: right;display: inline;background-image:none;background-color:#f9f9f9;"><img src="<?= $directoryPath; ?>include/_images/100.webp" class="rtl image" style="translate: -40% -50%; border-radius: 110%;"  alt="CPUimage"width="200px" /></a>

                <a href="<?= $directoryPath ?>español/acerca/imagenes/">Imágenes</a>
                <a href="<?= $directoryPath ?>español/acerca/trabajos/">Trabajos</a>
                <a href="<?= $directoryPath ?>español/acerca/escritura/">Escritura</a>

                </div>
              </li>

              <li class="<?= empty($casa) ? ($casa = 'current') : ($casa = 'active'); ?>">
              <a href="<?= ($casa == 'active') ? './' : $directoryPath.'./español/'; ?>">Inicio</a></li>

              <li class="current">
                <a href="<?= $directoryPath ?>../">English</a></li>

              <li class="<?= empty($acerca) ? ($acerca = 'current') : ($acerca = 'active'); ?>">
                <a href="<?= ($acerca == 'active') ? './' : $directoryPath.'español/acerca'; ?>">Acerca de</a>
              </li>

              <li class="<?= empty($hardware) ? ($hardware = 'current') : ($hardware = 'active'); ?>">
                <a href="<?= ($hardware == 'active') ? './' : $directoryPath.'español/hardware/'; ?>">Hardware</a>
              </li>

              <li class="<?= empty($software) ? ($software = 'current') : ($software = 'active'); ?>">
                <a href="<?= ($software == 'active') ? './' : $directoryPath.'español/software/'; ?>">Software</a>
              </li>

              <li class="<?= empty($contacto) ? ($contacto = 'current') : ($contacto = 'active'); ?>">
                <a href="<?= ($contacto == 'active') ? './' : $directoryPath.'español/contacto/'; ?>">Contacto</a>
              </li>

              <li class="<?= empty($critica) ? ($critica = 'current') : ($critica = 'active'); ?>">
                <a href="<?= ($critica == 'active') ? './' : $directoryPath.'español/critica/'; ?>">Reseñas</a>
              </li>

              <li class="<?= $phone="current"; ?>"><a href="tel:9092767214" style="translate: 705px -85px;color: #fff;font-size: 30px;background-color: rgba(51, 170, 51, .384);">909-276-7214</a></li>
            </ul>
        </nav>
        </div>
</div><!--^^ HBG ^^-->

<div class="content"> <!-- Content -->
  <div class="content_resize"><!-- Content Resize -->
    <?php content();
    ?>
  </div><!--^^ Content Resize ^^-->
</div><!--^^ Content ^^-->

<div class="fbg"> <!-- Footer Bar -->
        <div class="fbg_resize">
          <div class="col c1">
            <h2><span>Llámenos</span></h2>
            <a href="<?= $directoryPath ?>include/_images/bigphonenumber.png"> <img src="<?= $directoryPath ?>include/_images/number.jpg" alt=""

                height="85" width="230" /> </a><a></a></div>
          <a> </a>
          <div class="col c2"><a>
              <h2><span>Información</span></h2>
            </a>
            <p><a></a><a href="http://latinospc.com">LAtinosPC.com</a><br />
              Tel. (909)276-7214<br />
              (909)738-2452<br />
              E-mail:<a href="mailto:latinospc.com?subject=LATINOSPC.COM">LAtinosPC@gmail.com</a>
            </p>
          </div>
          <div class="col c3">
            <h2><span>Acerca de Nosotros</span></h2>
            <img src="<?= $directoryPath ?>include/_images/computer%20CPU.jpg" alt="" height="60" width="60" />
              <p>Una empresa con años de experiencia, brindando a las personas
                y familias del sur de California la experiencia de un sistema
                funcional. Sitios web personales con una apariencia profesional
                o casual y distinguida; a precios competitivos.
              </p>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <footer class="links">
  <nav class="footer-links">
    <a href="<?= $directoryPath ?>español/" class="link"><span class="link">Inicio</span></a>
    <a href="<?= $directoryPath ?>" class="link"><span class="link">English</span></a>
    <a href="<?= $directoryPath ?>español/acerca" class="link"><span class="link">Acerca</span></a>
    <a href="<?= $directoryPath ?>español/hardware" class="link"><span class="link">Hardware</span></a>
    <a href="<?= $directoryPath ?>español/software" class="link"><span class="link">Software</span></a>
    <a href="<?= $directoryPath ?>español/contacto" class="link"><span class="link">Contacto</span></a>
    <a href="<?= $directoryPath ?>español/reviews" class="link"><span class="link">Testimonios</span></a>
    <a href="<?= $directoryPath ?>español/backups" class="link"><span class="link">Respaldos</span></a>
    <a href="<?= $directoryPath ?>español/software/programs" class="link"><span class="link">Programas</span></a>
    <a href="<?= $directoryPath ?>español/hardware/" class="link"><span class="link">Anatomía Hw</span></a>
    <a href="<?= $directoryPath ?>español/hardware/notebooks" class="link"><span class="link">Notebooks</span></a>
    <a href="<?= $directoryPath ?>español/hardware/cables" class="link"><span class="link">Cables</span></a>
    <a href="<?= $directoryPath ?>español/software/websites" class="link"><span class="link">Paginas Web</span></a>
    <a href="<?= $directoryPath ?>español/software/passwords" class="link"><span class="link">contraseñas</span></a>
    <a href="<?= $directoryPath ?>español/tutorials" class="link"><span class="link">Tutoriales</span></a>
    <a href="<?= $directoryPath ?>español/images" class="link"><span class="link">Imágenes</span></a>
    <a href="<?= $directoryPath ?>español/artwork" class="link"><span class="link">Obras de Arte</span></a>
    <a href="<?= $directoryPath ?>español/writing" class="link"><span class="link">Escritura</span></a>
  </nav>
</footer>
      <div class="footer">
        <div class="footer_resize">
          <p class="lf">© Copyright <a href="http://latinospc.com">LAtinosPC.com</a>.</p>
          <p class="rf">Layout by Atomic <a href="http://www.atomicwebsitetemplates.com/">Website
              Templates</a></p>
        </div>
</div><!--^^ Footer Bar ^^-->


</main></body></html>