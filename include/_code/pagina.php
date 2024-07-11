<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <title><?= $title?></title>
    <link href="<?= $directoryPath ?>include/_code/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="<?= $directoryPath ?>annotation_2019_12_08_033413_AUw_2.ico">
</head>

<body>
    <div class="main">
<div class="header">
        <div class="header_resize">
          <div class="logo">
            <h1><a href="../"><span>LAtinos</span>PC.com<small>"PC" es por Computadora Personal
            </small></a></h1>
          </div>
          <div class="clr"></div>
        </div>
</div>

<div class="hbg">
        <div class="hbg_resize">
        <nav class="menu_nav">
            <ul>
              <li class="<?= $js="current"; ?>"><a href="#">Cristo Jesus</a></li>

              <li class="<?= empty($casa) ? ($casa = 'current') : ($casa = 'active'); ?>">
                <a href="../">Inicio</a></li>

              <li class="<?= empty($es) ? ($es = 'current') : ($es = 'active');?>">
                <a href="<?= $directoryPath ?>../">English</a></li>

              <li class="<?= empty($acerca) ? ($acerca = 'current') : ($acerca = 'active');?>">
                <a href="<?= $directoryPath ?>es/acerca">Acerca de</a></li>

              <li class="<?= empty($hardware) ? ($hardware = 'current') : ($hardware = 'active');?>">
                <a href="<?= $directoryPath ?>hardware/">Hardware </a></li>

              <li class="<?= empty($software) ? ($software = 'current') : ($software = 'active');?>">
                <a href="<?= $directoryPath ?>software/">Software </a></li>

              <li class="<?= empty($contact) ? ($contact = 'current') : ($contact = 'active');?>">
                <a href="<?= $directoryPath ?>contacto/">Contacto</a></li>

              <li class="<?= empty($critica) ? ($critica = 'current') : ($critica = 'active');?>">
                <a href="<?= $directoryPath ?>es/critica/">Reseñas</a></li>

              <li class="<?= $phone="current"; ?>"><a href="tel:+019092767214" style="translate: 705px -85px;color: #fff;font-size: 30px;background-color: rgba(51, 170, 51, .384);">909-276-7214</a></li>
            </ul>
        </nav>
        </div><?php $es=="current";  ?>
</div>

      <div class="content"> <!-- Content -->
        <div class="content_resize"><!-- Content Resize -->
<?php
content();
?>

        </div><!-- Content Resize -->
      </div><!-- Content -->

<div class="fbg"> <!-- Footer Bar -->
        <div class="fbg_resize">
          <div class="col c1">
            <h2><span>Call US</span></h2>
            <a href="<?= $directoryPath ?>include/_images/bigphonenumber.png"> <img src="<?= $directoryPath ?>include/_images/number.jpg" alt=""

                height="85" width="230" /> </a><a></a></div>
          <a> </a>
          <div class="col c2"><a>
              <h2><span>Information</span></h2>
            </a>
            <p><a></a><a href="http://latinospc.com">LAtinosPC.com</a><br />
              Tel. (909)276-7214<br />
              (909)738-2452<br />
              E-mail:<a href="mailto:latinospc.com?subject=LATINOSPC.COM">LAtinosPC@gmail.com</a>
            </p>
          </div>
          <div class="col c3">
            <h2><span>About</span></h2>
            <img src="<?= $directoryPath ?>include/_images/computer%20CPU.jpg" alt="" height="60" width="60" />
            <p>A company with years of experience, bringing Southern California
              people and families the experience of a working system. Personal
              websites with professional or casual and distinguished look; at
              your competitive prices </p>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <p style="text-align: center;"><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a></p>
        <p style="text-align: center;"><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
           <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
          <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
           <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
          <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
           <a href="about.html"> About Us</a>   <a href="terms.html">Terms</a>  
          <a href="contact.html">Contact Us</a>   <a href="testimonials.html">Testimonials</a></p>
      <div class="footer">
        <div class="footer_resize">
          <p class="lf">© Copyright <a href="http://latinospc.com">LAtinosPC.com</a>.</p>
          <p class="rf">Layout by Atomic <a href="http://www.atomicwebsitetemplates.com/">Website
              Templates</a></p>
        </div>
      </div>
</div><!-- Footer Bar -->

</body>
</html>