<?php
//backups are called with ?backups, we display this.
if (isset($_GET['backups'])) :
    $title="Backups";
    $keywords = '<meta name="keywords" content="data backup, file recovery, cloud storage, local backups, secure backups, computer backup, LatinosPC, backup solutions, personal data protection, business data protection, automated backups" />';
    $description = '<meta name="description" content="LatinosPC.com offers reliable data backup services to ensure the safety of your personal or business files. We provide both local and cloud backup solutions, tailored to your specific needs. Keep your data secure with our professional backup services.">';
else: //home page with no ?backups will display this
    $title="LAtinosPC.com Welcome";
    $keywords ='<meta name="keywords" content="Computer repair, virus removal, data backup, computer classes, in-person classes, online classes, IT support, gamers, small business IT, student IT support" />';
    $description = '<meta name="description" content="LatinosPC.com is your one-stop shop for all your computer repair needs. We offer a variety of services including computer repair, virus removal, data backup, and in-person and online computer classes. We work with individuals, students, small businesses, and gamers.">';
endif;

$directoryPath = './';
$home ='active';
include ('./include/_code/page.php');
function content(){
    if (isset($_GET['backups'])) {
        include_once('./backups.php');
        include_once('./include/_works/backups.php');
    }
    if (isset($_GET['Jesus']))  {
        include_once('./myLordAndSaviorJesusChrist.php');
        include_once('./include/_works/_faith/heavenlyFatherTellMeAboutTheWeb.php');
    }
    else{
 $title = "<h2>Your Trusted IT Solution Partner</h2>";
 $reliable ="Reliable, fast, and professional computer repair and IT services.";
 $services ='<h2>Our Services</h2>
                <ul>
                    <li>Custom PC Builds for Offices, Home Labs, and Gamers</li>
                    <li>Program Installation and Configuration</li>
                    <li>Managed Services (Weekly, Monthly, Quarterly, Bi-annually)</li>
                    <li>Computer Protection and Best Practices</li>
                    <li>Hardware Diagnosis and Solutions</li>
                    <li>Virus and Malware Removal</li>
                    <li>Backup Solutions (Local, Offsite, Cloud)</li>
                    <li>System Cleanups</li><img src="https://latinospc.com/images/button2.jpg" height="150px" width="350px" class="fl">
                    <li style="list-style-type: none">Remote Support and Phone Consultations</li><br />
                    <li style="list-style-type: none">Software/Hardware Upgrades and Buying Guides</li><br />
                    <li style="list-style-type: none">Bilingual Support:<br />(Tambien Hablamos Español)</li>
                </ul>';
 $specialOffers ='<h2>Special Offers</h2>
            <ul>
                <li>Small Business Service Plans</li>
                <li>In-person and Online Computer Classes for Beginners and Intermediate Users</li>
                <li>Remote and Phone-based Support</li>
                <li>Reasonable Rates: $35 Diagnosis Fee (added to cost of service/repair)</li>
                <img src="https://latinospc.com/images/storefront.png" class="rtl">
            </ul>';
 $contact ="<h2>Contact Us</h2>
            <p><span style=\"font-size:x-large;\">Call:<a href=\"tel:+19092767214\">909-276-7214</a><br />or<br />text</span> us for a free quote,<br />
            or to schedule a service appointment.</p>
            <p>We work with individuals, students, small-to-medium businesses, gamers, and professionals.</p>";
    include_once('./include/_works/start.php');

    }
}

?>
