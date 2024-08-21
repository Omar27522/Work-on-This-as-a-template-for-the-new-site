<?php
$title = "Test environment";
$directoryPath = '../';
$lang = 'en';
$software = 'active';

include('../include/_code/page.php');

function content(){
?>
<style>
.gallery {
    display: inline-flex;
    flex-wrap: wrap;
    width: 100%;
    height: 100%;
    position: relative;
}

.gallery-item {
    width: 100px;
    height: auto;
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.1);
}

h2 {
    font-size: xxx-large;
}
</style>
<article class="container hero4" id="menu">
    <section class="article ">
        <!--Section begins here -->
        <?= $nav = '<nav class="colms2" style="padding-bottom: 4%;margin-top: 4%;">
            <ul class="ex_menu sb_menu">
                <li class="current"><a href="#refactorization">Home</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Hardware</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">En Español</a></li>
            </ul>
        </nav>'; $footerNav = $nav;?>

        <article>
            <section id="refactorization" tabindex="0" class="blurb container">
                <h1><a href="#menu" >NEW RE-FACTORIZATION</a></h1>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 7/13/2024</p>
                <p>Welcome to the refactorization project! We're enhancing user experience, optimizing performance, and
                    updating the design. Expect a smoother, faster, and more visually appealing site that better meets
                    our user's needs. Stay tuned!</p>

                    <?php function button($id) {
                        echo '<a href="'.$id.'"><button>|=|</button></a>';
                    }
                    button('#system');
                    ?>
            </section>

            <section id="system" class="hero3">
            <?php
                    button('#refactorization');
                ?><br />
                <h2>SYSTEM</h2>
                <div class="colms2"><div>

<!-- This h3 need this style to align with the other that does not have it.-->

                <h3  style="margin-top: 0;">DIRECTORY DISTRIBUTION</h3>
                <p tabindex="0" class="selection_2">The site allows the user to navigate to each directory in a seemingly predictable way. There are as
                    many directories as new site locations. At the moment there are 7 directories in the root of the
                    folder. The reason is that the site can be traveled along, by directory, each directory is a
                    "/location" within the site, and most allow users in. For example: 1. A user is trying to leave a
                    message on the contact page, the site will redirect the user to the contact page location, under
                    "/contact" directory"</p></div><div>
                <h3>FILE MANAGEMENT</h3>
                <p tabindex="0" class="selection_2">The site has 2 types of directories, code and content. Page is the skeleton for the site. If you
                    navigate inside a folder most likely the only file in there, will be an index.php file. The include
                    directory houses all the content and the code. At the moment there are only 3 file directories,
                    "code", "images", and "works". There is a code and image directories. The works directory houses all
                    the content for each of the files inside their index.php file.</p>
                </div></div><br />
                <?php
                    button('#structure');
                ?>
                </section>

            <section id="structure" class="selection hero3">
            <?php
                    button('#system');
                ?><br />
                <h2>STRUCTURE</h2>
                <h3>HTML</h3>
                <p tabindex="0" class="selection_2">Each site has an HTML structure, and variable data will be displayed with arrays in PHP from another
                    file. For instance, the browser looks at the location of the site and starts to build the page,
                    page, and pagina PHP files under _code will run. When it gets to the content part of the content, a
                    function is being used, that is hosted in every file that loads the page.</p>
                <h3>CSS</h3>
                <p>There are 3 main CSS files nav, style, and start.</h3>
                <h3>JAVASCRIPT</h3>
                <p>So far there hasn't been a need for JS to be added to the project.</p>
                <?php
                    button('#design');
                ?>
            </section>

            <section id="design" tabindex="0" class="selection"><div class="hero4">
            <?php
                    button('#structure');
                ?><br />
                <h2>DESIGN</h2>
                <h3>PHP</h3>
                <p tabindex="0" class="selection_2">$variables are the literal content saved inside arrays. $titles will be used mostly for headings, and
                    one-word strings. $subTitle will contain longer strings, mostly blocks of text, or Sentences. $links
                    for external links to sites. $custom will be at discretion, in CPU there is variable $update,
                    $mobile, $cpu, $amd, $lga, $intel, $architecture, $links, $subTitle, and $title.</p>
                <h3>CSS</h3>
                <p>I would like to purge my CSS and make it more understandable.</p>
                </div><br />
                <?php
                    echo button('#todo');
                ?>
            </section>

            <section id="todo">
            <?php
                    button('#design');
                ?><br />
                <h2>TO-DO LIST 8/20/2024</h2>
                <ul>
                    <li>Backups Page...</li>
                    <li>Home: a better footer maybe?</li>
                    <li>En Español: pagina and page are undistinguishable twins.</li>
                    <li>Hardware: PCI card design...</li>
                    <li>Software: Program descriptions...</li>
                    <li>Contact Us. Make it more inviting. (design)</li>
                    <li>Reviews: design a reviews page before migrating existing data.</li>
                </ul>
                <h3>TECHNICAL</h3>
                <p>Data must be put into the site and translated into Spanish. We might need to find a more reliable way
                    than to fill arrays manually with data. But I like it because quality control is optimal.</p>
                <?php
                    echo button('#menu');
                ?>
                </section>

            <section id="menu">
                <h2>JESUS CHRIST</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>This is the menu for the site, many things need to be improved before release, but we should focus on
                    simple changes -fast.</p>
                <h3>BACKUPS</h3>
                <p>Backups needs to have more pics and look better overall</p>
                <h3>PROGRAMS</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>ANATOMY</h3>
                <p>0 0 0 1 1 1 1</p>
                <?php
                    echo button('#about');
                ?>
            </section>

            <section id="about">
                <h2>ABOUT US</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>About us page</p>
                <?php
                    echo button('#artwork');
                ?>
            </section>

            <section id="artwork">
                <h3>ARTWORK</h3>
                <p>0 1</p>
                <h3>IMAGES</h3>
                <p>0 1 1</p>
                <h3>TUTORIALS</h3>
                <p>0 1 1</p>
                <h3>WRITING</h3>
                <p>0 1 1</p>
            </section>
        </article>

        <footer>
            <!-- Add footer content here -->
            <?= $footerNav;?>
        </footer>

        <script src="js/script.js"></script>

        <!--Section ends here -->

    </section>
</article>
<div class="container">
    <h2>Gallery</h2>

    <figure>
        <?php
        // Define the image map with image paths and descriptions
        $imageMap = [
            'first' => ['./image1.png', 'Sample Description One in a million'],
            'second' => ['./image2.png', 'Sample Description Two'],
            'third' => ['./image3.png', 'Sample Description Three'],
            'fourth'=> ['./image4.png', 'Sample Description Four'],
            'fifth' => ['./image5.png', 'Sample Description Five'],
            'sixth' => ['./image6.png', 'Sample Description Six'],
            'seventh' => ['./image7.png', 'Sample Description Seven'],
            'eighth' => ['./image8.png', 'Sample Description Eight'],
            'ninth' => ['./image9.png', 'Sample Description Nine'],
            'tenth' => ['./image10.png', 'Sample Description Ten'],
            'eleventh' => ['./image11.png', 'Sample Description Eleven'],
            'twelfth' => ['./image12.png', 'Sample Description Twelve']

        ];

        // Define the default image and description
        $defaultImage = ['./image4.png', 'Default image description. I need to change the image when a user chooses a different image. All images have their own unique captions.'];

        // Initialize the image source and description
        $imageSrc = $defaultImage[0];
        $imageDesc = $defaultImage[1];

        // Check if any query parameter is set and update the image source and description accordingly
        foreach ($imageMap as $key => $value) {
            if (isset($_GET[$key])) {
                $imageSrc = $value[0];
                $imageDesc = $value[1];
                break;
            }
        }

        // Display the image and description
        echo "<img src=\"$imageSrc\" width=\"100%\">";
        echo "<figcaption><p>$imageDesc</p></figcaption>";
        ?>
    </figure>

    <div class="gallery">
        <?php
        // Define the image filenames and corresponding query parameters for the gallery
        $galleryImages = [
            ['./image1.png', '?first'],
            ['./image2.png', '?second'],
            ['./image3.png', '?third'],
            ['./image4.png', '?fourth'],
            ['./image5.png', '?fifth'],
            ['./image6.png', '?sixth'],
            ['./image7.png', '?seventh'],
            ['./image8.png', '?eighth'],
            ['./image9.png', '?ninth'],
            ['./image10.png', '?tenth'],
            ['./image11.png', '?eleventh'],
            ['./image12.png', '?twelfth']
        ];

        // Display the gallery items
        foreach ($galleryImages as [$image, $query]) {
            echo "<a href=\"$query\"><img src=\"$image\" class=\"gallery-item\"></a>";
        }
        ?>
    </div>
</div>

<?php } ?>