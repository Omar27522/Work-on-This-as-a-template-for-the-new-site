<?php
$title = "Test environment";
$directoryPath = '../';
$lang = 'en';
$software = 'active';

include('../include/_code/page.php');
function content(){ ?>

<article class="fullbar hero4" id="top">
    <div class="blurb hero3" style="font-size: large">
        <h2 style="text-align: center">New LAtinosPC Website <a href="https://latinospc.com">@LAtinosPC.com</a></h2>
    </div>
    <article class="article" style="margin-top: 0%;">
        <!--This is the whole document -->
        <!--Section begins here -->
        <?= $nav = '<nav class="colms2" style="padding-bottom: 4%;padding-top: 4%;">
            <ul class="ex_menu sb_menu">
                <li class="current"><a href="#refactorization">Home</a></li>
                <li><a href="#system">System</a></li>
                <li><a href="#structure">Structure</a></li>
                <li><a href="#design">Design</a></li>
                <li><a href="#to-do">To-Do List</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#hardware">Hardware</a></li>
                <li><a href="#software">Software</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#reviews">Reviews</a></li>
            </ul>
        </nav>'; $footerNav = $nav;?>

        <article>
            <section id="refactorization" tabindex="0" class="blurb container">
                <h1><a href="#top">NEW RE-FACTORIZATION</a></h1>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 7/13/2024</p>
                <p>Welcome to the refactorization project! We're enhancing the user experience, optimizing performance,
                    and
                    updating the design.<br /><br />
                    Expect a smoother, faster, and more visually appealing site that better meets
                    our user's needs.<br />Stay tuned!</p>
                <?php function button($id) {
                        echo '<a href="'.$id.'" tabindex="0" title="'.ucfirst(ltrim($id, "#")).'"><button style="padding:3%; border:.7px solid black" class="selection">'.ucfirst(ltrim($id, "#")).'</button></a>';
                    }
                    button('#system');
                    ?>
            </section>
            <?php function separator_bar()  {
                echo '<hr><a href="#footer"><hr class="selection" width="20%"></a><hr>';
                }

            separator_bar();
            ?>

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
                            seemingly predictable way.<br /><br />
                            There are as many directories as new site locations, 7 directories inside the main folder in
                            total.<br /><br />
                            The site can be traveled along by directory, each directory is a <b>"/location"</b> within
                            the site. And most allow users in.<br /><br />
                            <b>Example: 1.</b><br />
                            A user is trying to leave a message on the <em>contact</em> page.
                            The site will redirect the user to the <em>contact</em> page location, under
                            <b>"/contact"</b> directory.
                        </p>
                    </div>
                    <div>
                        <h3>FILE MANAGEMENT</h3>
                        <p tabindex="0" class="selection_2" style="margin-left: .8%;">The site has two types of
                            directories; <b>code</b> and <b>content</b>.<br /><br />
                            -<em>Page</em>- or -<em>Pagina</em>- are the configurations for the site.<br /><br />
                            Say a user navigates inside a folder; most likely, the only file in there will be an
                            <em>index.php</em> file.<br /><br />
                            The <b>include</b> directory houses all the <em>content</em> and the <em>code.</em> At the
                            moment there are only 3 file directories, "code", "images", and "works".<br />
                            <em>Code</em> and <em>image</em> directories, are self explanatory.<br /><br />
                            The <b>works</b> directory houses all the content for each of the files from their
                            individual <em>index.php</em> file.
                        </p>
                    </div>
                </div><br />
                <?php
                    button('#structure');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" id="structure" class="blurb hero3">
                <?php
                    button('#system');
                ?><br />
                <h2>STRUCTURE</h2>
                <h3>HTML</h3>
                <p tabindex="0" class="selection_2">
                    Each page has an <em>HTML</em> structure and also, data_in_variables (variable data) as content.<br />
                    The content is to be displayed from arrays in another <em>PHP</em> file inside its corresponding
                    directory...<br /><br />
                    For instance, the browser looks at the location of the site and starts to build the <em>page</em>, or
                    <em>pagina</em> <em>PHP</em> files under directory <em>_code</em> inside <em>include</em>.<br /><br />
                    When the browser gets to the content-part of the content, a
                    <u>function</u> is being used. This <u>function</u> is hosted on every file that loads the page.</p>
                <h3>CSS</h3>
                <p>There are 3 main CSS files: <em>nav</em>, <em>style</em>, and <em>start</em>.</h3>
                <h3>JAVASCRIPT</h3>
                <p>So far there hasn't been a need for any <em>JS</em> to be added to the project. It will be added on future iterations.</p>
                <?php
                    button('#design');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section id="design" tabindex="0" class="blurb hero3">
                <?php
                    button('#structure');
                ?><br />
                <h2>DESIGN</h2>
                <h3>PHP</h3>
                <ul tabindex="0" class="selection_2" style="text-align: left"><li>$variables are the literal content saved inside arrays.</li>
                <li>$titles will be used mostly for headings, and one-word strings.</li>
                <li>$subTitle will contain longer strings, mostly blocks of text, or Sentences.</li>
                <li>$links for external links to sites.</li>
                <li>$custom will be at discretion.</li>
                <h3 style="text-align: center">Example:</h3>
                <li>In <em>CPU</em> there is variable, $update, $mobile, $cpu, $amd, $lga, $intel, $architecture, $links, $subTitle, and $title.</li>
                </ul>
                <h3>CSS</h3>
                <p>I would like to purge my CSS and make it more understandable.</p>
                <br />
                <?php
                    button('#to-do');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" id="to-do" class="blurb hero3">
                <?php
                    button('#design');
                ?><br />
                <h2>TO-DO LIST 8/26/2024</h2>
                <ul style="text-align: left">
                    <li><s>Backups Page...</s> <a href="../?backups#scroll">check it out</a> <a href="../español/?respaldos#scroll">Dale Click</a></li>
                    <li>Home: a better footer maybe?</li>
                    <li>En Español: pagina and page are undistinguishable twins.</li>
                    <li><s>Hardware: PCI card design...</s> <a href="../hardware/?pci#scroll">check it out</a></li>
                    <li>Software: Program descriptions...</li>
                    <li>Contact Us. Make it more inviting. (design)</li>
                    <li>Reviews: design a reviews page before migrating existing data.</li>
                </ul>
                <h3>TECHNICAL</h3>
                <p>Data must be put into the site and translated into Spanish. We might need to find a more reliable way
                    than to fill arrays manually with data. But I like it because quality control is optimal.</p>
                <?php
                     button('#menu');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" id="menu" class="blurb hero3">
            <?php
                     button('#to-do');
                ?><br />
                <h2>JESUS CHRIST</h2>
                <p>When the user clicks on the picture, the user will be sent to a page called, Heavenly Father tell me about the web.</p>
                <p>This section is the menu for the site, many things need to be improved before release, but we should focus on
                    simple changes -fast.</p>
                <h3>BACKUPS</h3>
                <p>Backups are hosted on the root directory. there is a statement that checks for the URL ?backups || ?respaldos.
                    and displays the backups file under _works. the $variables file will be hosted in the root directory under the name backups.php,
                    and respaldos.php.
                </p>
                <h3>PROGRAMS</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>ANATOMY</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>NoteBooks</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Cables</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Websites</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Passwords</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Tutorials</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Images</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Artwork</h3>
                <p>0 0 0 1 1 1 1</p>
                <h3>Writing</h3>
                <p>0 0 0 1 1 1 1</p>
                <?php
                    echo button('#about');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" class="blurb hero3" id="about">
            <?php
                     button('#menu');
                ?><br />
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
            <?php separator_bar();  ?>

            <section tabindex="0" class="blurb hero3" id="hardware">
            <?php
                     button('#about');
                ?><br />
                <h2>Hardware</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>Hardware page</p>

                <aside style="text-align: left">
                    <h3>CPU</h3>
                    <p>0 10</p>
                    <h3>RAM</h3>
                    <p>0 1</p>
                    <h3>SSD</h3>
                    <p>0 1</p>
                    <h3>Motherboard</h3>
                    <p>0 1</p>
                    <h3>Power Supply</h3>
                    <p>0 1</p>
                    <h3>GPU</h3>
                    <p>0 1</p>
                    <h3>Case</h3>
                    <p>0 1</p>
                    <h3>Coolers</h3>
                    <p>0 1</p>
                    <h3>Mouse</h3>
                    <p>0 1</p>
                    <h3>Keyboard</h3>
                    <p>0 1</p>
                    <h3>Display</h3>
                    <p>0 1</p>
                    <h3>External Memory drive</h3>
                    <p>0 1</p>
                    <h3>PCI Cards</h3>
                    <p>0 1</p>
                    <h3>Scanners</h3>
                    <p>0 1</p>
                    <h3>Printers</h3>
                    <p>0 1</p>
                    <h3>Console Controllers</h3>
                    <p>0 1</p>
                    <h3>Joysticks</h3>
                    <p>0 1</p>
                    <h3>Tablets</h3>
                    <p>0 1</p>
                    <h3>Microphones</h3>
                    <p>0 1</p>
                    <h3>Headsets</h3>
                    <p>0 1</p>
                    <h3>Headphones</h3>
                    <p>0 1</p>
                    <h3>Audio Mixers</h3>
                    <p>0 1</p>
                    <h3>Controllers</h3>
                    <p>0 1</p>
                    <h3>Gaming Uniforms</h3>
                    <p>0 1</p>
                    <h3>Pens, Pencils, and Tablets</h3>
                    <p>0 1</p>
                    <h3>Chairs</h3>
                    <p>0 1</p>
                    <h3>Desks</h3>
                    <p>0 1</p>
                    <h3>Anti-Slip Mats</h3>
                    <p>0 1</p>
                    <h3>Speakers and Subwoofers</h3>
                    <p>0 1</p>
                </aside>
                <?php
                    echo button('#software');
                ?>
            </section>
            <?php separator_bar();  ?>

            <section tabindex="0" class="blurb hero3" id="software">
            <?php
                     button('#hardware');
                ?><br />
                <h2>Software</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>Software page</p>

                <aside style="text-align: left">
                    <h2>Open Source</h2>
                    <p>0 1</p>
                    <h2>Free</h2>
                    <p>0 1 1</p>
                    <h2>Shareware</h2>
                    <p>0 1 1</p>
                    <h2>Trial-ware</h2>
                    <p>0 1 1</p>
                    <h2>Paid</h2>
                    <p>0 1 1</p>
                    <h2>Subscription</h2>
                    <p>0 1 1</p>
                    <h2>Anti Virus</h2>
                    <p>0 1 1</p>
                    <h2>Malware Cleaner</h2>
                    <p>0 1 1</p>
                    <h2>Web Browsers</h2>
                    <p>0 1 1</p>
                    <h2>Messaging</h2>
                    <p>0 1 1</p>
                    <h2>Media</h2>
                    <p>0 1 1</p>
                    <h2>Run-times</h2>
                    <p>0 1 1</p>
                    <h2>Imaging</h2>
                    <p>0 1 1</p>
                    <h2>Documents</h2>
                    <p>0 1 1</p>
                    <h2>File Sharing</h2>
                    <p>0 1 1</p>
                    <h2>Online Storage</h2>
                    <p>0 1 1</p>
                    <h2>Other</h2>
                    <p>0 1 1</p>
                    <h2>Utilities</h2>
                    <p>0 1 1</p>
                    <h2>Compression</h2>
                    <p>0 1 1</p>
                    <h2>Developer Tools </h2>
                    <p>0 1 1</p>
                </aside>
                <?php
                    echo button('#contact');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" class="blurb hero3" id="contact">
            <?php
                     button('#software');
                ?><br />
                <h2>Contact US</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/26/2024</p>
                <p>Contact us page is using a php form called Simple PHP Contact Form master.<br />
                    The contact directory hosts the contact form in 3 separate directories.
                    <ul>
                        <li>Config</li>
                        <li>Public</li>
                        <li>Vendor</li>
                    </ul>
                    and the main script that runs the form is in the public directory is called autoload.php inside Vendor directory.
            </p>

                <aside style="text-align: left">
                    <h2>Contact Us</h2>
                    <p>0 1</p>
                    <h2>LATPC</h2>
                    <p>0 1 1</p>
                    <h2>Contact Box</h2>
                    <p>0 1 1</p>
                </aside>
                <?php
                    echo button('#reviews');
                ?>
            </section>

            <?php separator_bar();  ?>

            <section tabindex="0" class="blurb hero3" id="reviews">
            <?php
                     button('#contact');
                ?><br />
                <h2>Contact US</h2>
                <p>Pomona, CA | 909-276-7214 | help@latinospc.com | 8/20/2024</p>
                <p>Contact us page</p>

                <aside style="text-align: left">
                    <h2>Contact Us</h2>
                    <p>0 1</p>
                    <h2>LATPC</h2>
                    <p>0 1 1</p>
                    <h2>Contact Box</h2>
                    <p>0 1 1</p>
                </aside>
                <?php
                    echo button('#footer');
                ?>
            </section>
        </article>

        <footer id="footer">
            <!-- Add footer content here -->
            <?= $footerNav;?>
        </footer>

        <!--Section ends here -->
    </article>
    <?php }