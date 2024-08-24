<?php
$title = "Test environment";
$directoryPath = '../';
$lang = 'en';
$software = 'active';

include('../include/_code/page.php');
function content(){ ?>

<article class="fullbar hero4" id="top">
<div class="blurb hero3"style="font-size: large"><h2 style="text-align: center">New LatinosPC Website <a href="https://latinospc.com">@latinospc.com</a></h2></div>
    <section class="article" style="margin-top: 0%;">
        <!--This is the whole document -->
        <!--Section begins here -->
        <?= $nav = '<nav class="colms2" style="padding-bottom: 4%;padding-top: 4%;">
            <ul class="ex_menu sb_menu">
                <li class="current"><a href="#refactorization">Home</a></li>
                <li><a href="#system">System</a></li>
                <li><a href="#structure">Structure</a></li>
                <li><a href="#design">Design</a></li>
                <li><a href="#todo">To-Do List</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>'; $footerNav = $nav;?>

        <article>
            <section id="refactorization" tabindex="0" class="blurb container">
                <h1><a href="#top">NEW RE-FACTORIZATION</a></h1>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 7/13/2024</p>
                <p>Welcome to the refactorization project! We're enhancing user experience, optimizing performance, and
                    updating the design. Expect a smoother, faster, and more visually appealing site that better meets
                    our user's needs. Stay tuned!</p>
                <?php function button($id) {
                        echo '<a href="'.$id.'" tabindex="0" title="'.ucfirst(ltrim($id, "#")).'"><button style="padding:3%; border:.7px solid black" class="selection">'.ucfirst(ltrim($id, "#")).'</button></a>';
                    }
                    button('#system');
                    ?>
            </section>

            <hr>
            <hr class="selection" width="20%">
            <hr>

            <section tabindex="0" id="system" class="hero3 blurb">
                <?php
                    button('#refactorization');
                ?><br />
                <h2>SYSTEM</h2>
                <div class="colms2">
                    <div>

                        <!-- This h3 need this style to align with the other that does not have it.-->

                        <h3 style="margin-top: 0;">DIRECTORY DISTRIBUTION</h3>
                        <p tabindex="0" class="selection_2">The site allows the user to navigate to each directory in a
                            seemingly predictable way. There are as
                            many directories as new site locations. At the moment there are 7 directories in the root of
                            the
                            folder. The reason is that the site can be traveled along, by directory, each directory is a
                            "/location" within the site, and most allow users in. For example: 1. A user is trying to
                            leave a
                            message on the contact page, the site will redirect the user to the contact page location,
                            under
                            "/contact" directory"</p>
                    </div>
                    <div>
                        <h3>FILE MANAGEMENT</h3>
                        <p tabindex="0" class="selection_2">The site has 2 types of directories, code and content. Page
                            is the skeleton for the site. If you
                            navigate inside a folder most likely the only file in there, will be an index.php file. The
                            include
                            directory houses all the content and the code. At the moment there are only 3 file
                            directories,
                            "code", "images", and "works". There is a code and image directories. The works directory
                            houses all
                            the content for each of the files inside their index.php file.</p>
                    </div>
                </div><br />
                <?php
                    button('#structure');
                ?>
            </section>

            <hr><hr class="selection" width="20%"><hr>

            <section tabindex="0" id="structure" class="blurb hero3">
                <?php
                    button('#system');
                ?><br />
                <h2>STRUCTURE</h2>
                <h3>HTML</h3>
                <p tabindex="0" class="selection_2">Each site has an HTML structure, and variable data will be displayed
                    with arrays in PHP from another
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

            <hr>
            <hr class="selection" width="20%">
            <hr>

            <section id="design" tabindex="0" class="blurb hero3">
                <?php
                    button('#structure');
                ?><br />
                <h2>DESIGN</h2>
                <h3>PHP</h3>
                <p tabindex="0" class="selection_2">$variables are the literal content saved inside arrays. $titles will
                    be used mostly for headings, and
                    one-word strings. $subTitle will contain longer strings, mostly blocks of text, or Sentences. $links
                    for external links to sites. $custom will be at discretion, in CPU there is variable $update,
                    $mobile, $cpu, $amd, $lga, $intel, $architecture, $links, $subTitle, and $title.</p>
                <h3>CSS</h3>
                <p>I would like to purge my CSS and make it more understandable.</p>
                <br />
                <?php
                    echo button('#todo');
                ?>
            </section>

            <hr><hr class="selection" width="20%"><hr>

            <section tabindex="0" id="todo" class="blurb hero3">
                <?php
                    button('#design');
                ?><br />
                <h2>TO-DO LIST 8/20/2024</h2>
                <ul style="text-align: left">
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

            <hr><hr class="selection" width="20%"><hr>

            <section tabindex="0" id="menu" class="blurb hero3">
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

            <section tabindex="0" class="blurb hero3" id="about">
                <h2>ABOUT US</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>About us page</p>
                
            

            <aside style="text-align: left">
                <h2>ARTWORK</h2>
                <p>0 1</p>
                <h2>IMAGES</h2>
                <p>0 1 1</p>
                <h2>TUTORIALS</h2>
                <p>0 1 1</p>
                <h2>WRITING</h2>
                <p>0 1 1</p>
</aside>
                <?php
                    echo button('#artwork');
                ?>
            </section>
        </article>

        <footer>
            <!-- Add footer content here -->
            <?= $footerNav;?>
        </footer>

        <!--Section ends here -->
    </section>
<?php }