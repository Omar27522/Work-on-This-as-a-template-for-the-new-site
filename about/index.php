<?php
$title="About Us";
$directoryPath = '../';
$about ='active';
$keywords ='<meta name="keywords" content="California, Los Angeles County, San Bernardino county, Riverside County, Orange County, computer service and repair">';
$description ='<meta name="description" content="We want to bring families and individuals, the experience of a fully working computer system; laptops and desktops. We offer mostly on-site and remote services, but we will work on a physical location soon.">';

include ('../include/_code/page.php');

function content(){
    $title = ' <h2>About Us</h2>';
    $start = ' <p>We started back in 2009 with one technician Omar, we have one goal since, here in LAtinosPC we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops. We offer mostly on-site and remote services, but we will work on a physical location soon. Omar started his career while still in high school, attending adult school evening classes, after that he went to college. His computer career started for family and friends and fixing their computers, then friends of friends and their families. After home computers then we started working with small local businesses with their day-to day computer needs. And have been trying to stay busy since 2009.</p>';
    $guarantee =' <h2>100% Satisfaction Guarantee | 90  Days Service Package -included</h2>
    <div class="clr"></div>
    <a rel="example_group" href="https://latinospc.com/images/button.jpg" title="Tool Box" alt="LAPC">
      <img src="https://latinospc.com/images/s_button.webp" width="263" height="146" alt="image" class="lr" />
    </a>
    <h3>LAtinosPC has branched out to a few other industry fields, and we will bring the same level of dedication to every project. We build basic personalized websites with a unique design for a flat rate!</h3>
    <h2>We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC.</h2>
    <a href="?omar#more_content" class="rm">
      <h3>Read more</h3>
    </a>
    <div class="clr"></div>';

    include_once('../include/_works/about.php');
}


?>
