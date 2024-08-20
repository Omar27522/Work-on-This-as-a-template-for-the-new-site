<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <title><?= $title ?></title>
    <link href="<?= $directoryPath ?>include/_code/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_works/start.css" rel="stylesheet" type="text/css" />
    <link href="<?= $directoryPath ?>include/_code/nav.css" rel="stylesheet" type="text/css" />
    <script defer src="<?= $directoryPath ?>include/_code/script.js" ></script>
	<link rel="icon" href="<?= $directoryPath ?>annotation_2019_12_08_033413_AUw_2.ico">
  <?php if(!empty($keywords) && !empty($description)){  echo $keywords.$description;  } ?>
  <meta name="author" content="LAtinosPC">
</head>

<body>
    <div class="main">
<header class="header">
        <div class="header_resize">
          <div class="logo">
            <h1><a href="../"><span>LAtinos</span>PC.com<small>"PC" is for Personal Computer
            </small></a></h1>
          </div>
          <div class="clr"></div>
        </div>
</header>

<!-- Dropdown Menu https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp -->

<!--^^ Dropdown Menu ^^-->
<!-- ONE page for all the site !empty($about) || !empty($hardware) || || !empty($es_software) || !empty($contact) || !empty($reviews)-->
<div class="hbg"><!-- HBG -->
        <div class="hbg_resize">
        <nav class="menu_nav navbar">
            <ul> <?php   if  (!empty($about) || !empty($hardware) || !empty($software) || !empty($contact) || !empty($reviews)){
            include($directoryPath.'include/_code/jesuschrist.php');
            }
            else if (!empty($home)){
            include('./include/_code/jesuschrist.php');
            //JesusChrist();
            }
            ?>

              <li class="<?= empty($home) ? ($home = 'current') : ($home = 'active'); ?>">
                <a href="<?=$directoryPath ?>">Home</a></li>

              <li class="<?= empty($es) ? ($es = 'current') : ($es = 'active');?>">
                <a href="<?= $directoryPath ?>español/">En Español</a></li>

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

              <li class="current"><a href="tel:+019092767214" style=" translate: 705px -85px; color: #fff;font-size: 30px;background-color: rgba(51, 170, 51, .384);">909-276-7214</a></li>
            </ul>
        </nav>
        </div> <!-- HBG Resize -->
</div><!--^^ HBG ^^-->

      <div class="content"> <!-- Content -->
        <div class="content_resize"><!-- Content Resize -->
<?=
  content(); ?>

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
      <footer class="links">
      <nav class="footer-links">
  <a href="<?= $directoryPath ?>" class="link"><span class="link">Home</span></a>
  <a href="<?= $directoryPath ?>español/" class="link"><span class="link">Español</span></a>
  <a href="<?= $directoryPath ?>about" class="link"><span class="link">About Us</span></a>
  <a href="<?= $directoryPath ?>hardware" class="link"><span class="link">Hardware</span></a>
  <a href="<?= $directoryPath ?>software" class="link"><span class="link">Software</span></a>
  <a href="<?= $directoryPath ?>contact" class="link"><span class="link">Contact Us</span></a>
  <a href="<?= $directoryPath ?>reviews" class="link"><span class="link">Testimonials</span></a>
  <a href="<?= $directoryPath ?>?backups#article" class="link"><span class="link">Backups</span></a>
  <a href="<?= $directoryPath ?>software/programs" class="link"><span class="link">Programs</span></a>
  <a href="<?= $directoryPath ?>hardware/#article" class="link"><span class="link">HW Anatomy</span></a>
  <a href="<?= $directoryPath ?>hardware/notebooks" class="link"><span class="link">Notebooks</span></a>
  <a href="<?= $directoryPath ?>hardware/cables" class="link"><span class="link">Cables</span></a>
  <a href="<?= $directoryPath ?>software/websites" class="link"><span class="link">Websites</span></a>
  <a href="<?= $directoryPath ?>software/passwords" class="link"><span class="link">Passwords</span></a>
  <a href="<?= $directoryPath ?>about/tutorials/" class="link"><span class="link">Tutorials</span></a>
  <a href="<?= $directoryPath ?>about/images" class="link"><span class="link">Images</span></a>
  <a href="<?= $directoryPath ?>about/artwork" class="link"><span class="link">Artwork</span></a>
  <a href="<?= $directoryPath ?>about/writing" class="link"><span class="link">Writing</span></a>
</nav>

</footer>
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