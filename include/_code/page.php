<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <title><?= $title?></title>
    <link href="<?= $directoryPath ?>include/_code/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_works/start.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_code/nav.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="<?= $directoryPath ?>annotation_2019_12_08_033413_AUw_2.ico">
</head>

<body>
    <div class="main">
<div class="header">
        <div class="header_resize">
          <div class="logo">
            <h1><a href="../"><span>LAtinos</span>PC.com<small>"PC" is for Personal Computer
            </small></a></h1>
          </div>
          <div class="clr"></div>
        </div>
</div>

<!-- Dropdown Menu -->
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<!--^^ Dropdown Menu ^^-->

<div class="hbg">
        <div class="hbg_resize">
        <nav class="menu_nav navbar">
            <ul>
              <li class="<?= $js="current dropdown"; ?>"><a class="dropbtn" onclick="myFunction()">Jesus Christ</a>
                <div class="dropdown-content" id="myDropdown">
                <img src="../include/_images/computer%20CPU.jpg" alt="CPUimage"/>
                <div class="rtl"style="padding-top: 30px;padding-right:20px;"><a href="../">Link 8</a>
                  <a href="../">Link 9</a>
                  <a href="../">Link 12</a>
                  <a href="../">Link 10</a>
                  <a href="#link11">Link 11</a>
                </div>
                <a href="../">Link 1</a>
                <a href="../">Link 2</a>
                <a href="../">Link 3</a><img src="../include/_images/computer%20CPU.jpg" class="rtl" style="padding-right: 30px" alt="CPUimage"width="400px" />
                <a href="../">Si esta muy largo el link ya chafíe</a>
                <a href="../">Link 5</a>
                <a href="../">Link 6</a>
                <a href="../">Link 7</a>
                </div>
              </li>

              <li class="<?= empty($home) ? ($home = 'current') : ($home = 'active'); ?>">
                <a href="../">Home</a></li>

              <li class="<?= empty($es) ? ($es = 'current') : ($es = 'active');?>">
                <a href="<?= $directoryPath ?>es/">En Español</a></li>

              <li class="<?= empty($about) ? ($about = 'current') : ($about = 'active');?>">
                <a href="<?= $directoryPath ?>about/">About Us</a></li>

              <li class="<?= empty($hardware) ? ($hardware = 'current') : ($hardware = 'active');?>">
                <a href="<?= $directoryPath ?>hardware/">Hardware </a></li>

              <li class="<?= empty($software) ? ($software = 'current') : ($software = 'active');?>">
                <a href="<?= $directoryPath ?>software/">Software </a></li>

              <li class="<?= empty($contact) ? ($contact = 'current') : ($contact = 'active');?>">
                <a href="<?= $directoryPath ?>contact/">Contact Us</a></li>

              <li class="<?= empty($reviews) ? ($reviews = 'current') : ($reviews = 'active');?>">
                <a href="<?= $directoryPath ?>reviews/">Reviews</a></li>

              <li class="<?= $phone="current"; ?>"><a href="tel:+019092767214" style="translate: 705px -85px;color: #fff;font-size: 30px;background-color: rgba(51, 170, 51, .384);">909-276-7214</a></li>
            </ul>
        </nav>
        </div> <!-- HBG Resize -->
</div><!-- HBG -->

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
            <img src="../include/_images/computer%20CPU.jpg" alt="" height="60" width="60" />
            <p>A company with years of experience, bringing Southern California
              people and families the experience of a working system. Personal
              websites with professional or casual and distinguished look; at
              your competitive prices </p>
          </div>
          <div class="clr"></div>
        </div>
      </div> <!--I tried to fix the code with the linksColor class -->
      <p class="links" style="text-align: center;"><a href="#" class="linksColor">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html" class="linksColor">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html" class="linksColor">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html" class="linksColor">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html" class="linksColor">Testimonials</a><a href="#">Home</a>   <a href="inicio.html">Espanol</a>
         <a href="about.html"> About Us</a>   <a href="terms.html" class="linksColor">Terms</a>  
        <a href="contact.html">Contact Us</a>   <a href="testimonials.html" class="linksColor">Testimonials</a></p>

      <div class="footer">
        <div class="footer_resize">
          <p class="lf">© Copyright <a href="http://latinospc.com" style=":hover{color}">LAtinosPC.com</a>.</p>
          <p class="rf">Layout by Atomic <a href="http://www.atomicwebsitetemplates.com/">Website
              Templates</a></p>
        </div>
      </div>
</div><!-- Footer Bar -->

</body>
</html>