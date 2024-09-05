<article class="fullbar"> <!--PLEASE REFORMAT THIS PAGE, MAKE THE CODE MORE READABLE  =0k= -->
    <!--Full Bar -->
    <section class="hero3" id="software">
        <div class="container"><?= empty($title) ? $titulo : $title;?>
            <a href="#title"><img src="https://latinospc.com/images/programs/code.jpg" width="263" height="146"
                    alt="image" class="rtl" /></a>
            <?= empty($description) ? $descripcion[0] : $description[0];?>
        </div><span id="ps2"></span><br />
        <div class="container">
            <?php //ISSET checks if $_GET is set then depending on the key the switch statement will have the Spanish and english versions of each of the program categories. for right now the id's and the links will remain the same for both versions. and focuser image is the image file, later we might change this to incorporate a different version of the image.
            //Also the titles need to be changed || added to titulos for the h2 in the description
            if (isset($_GET)) :
                switch (key($_GET)) :
            case 'antivirus': $imag = 'av'; $title = 'Antivirus'; $titulo = $title; $id = 'Anti-Virus'; $link = '#Anti-Virus';
                break;

            case 'malwarecleaner': case 'limpiadordemalware':
                $imag = 'mwc'; $title = 'Malware Cleaner'; $titulo = 'Limpiadores de Malware'; $id = 'MalwareCleaner'; $link = '#MalwareCleaner';
                break;

            case 'webbrowsers': case 'navegadoresweb':
                $imag = 'wb'; $title = 'Web Browsers'; $titulo = 'Navegadores Web'; $id = 'WebBrowsers'; $link = '#WebBrowsers';
                break;

            case 'messaging': case 'mensajeria':
                    $imag = 'msg'; $title = 'Messaging'; $titulo = 'Mensajería'; $id = 'Messaging'; $link = '#Messaging';
                break;

            case 'media': case'multimedia':
                    $imag = 'media';$title = 'Media'; $titulo = 'Multi-Media'; $id = 'Media'; $link = '#Media';
                break;

            case 'runtimes':
                $imag = 'rt'; $title = 'Runtimes'; $titulo = 'Tiempos de Ejecución'; $id = 'Runtimes'; $link = '#Runtimes';
                break;

            case 'imaging': case 'imagenes':
                $imag = 'img'; $title = 'Imaging'; $titulo = 'Imágenes'; $id = 'Imaging'; $link = '#Imaging';
                break;

            case 'documents': case 'documentos':
                $imag = 'docs'; $title = 'Documents'; $titulo = 'Documentos'; $id = 'Documents'; $link = '#Documents';
                break;

            case 'filesharing': case 'archivosparacompartir':
                $imag = 'filsha'; $title = 'File Sharing'; $titulo ='Archivos para Compartir'; $id = 'FileSharing'; $link = '#FileSharing';
                break;

            case 'onlinestorage': case 'almacenamientoenlinea':
                $imag = 'ons'; $title = 'Online Storage'; $titulo = 'Almacenamiento en Linea'; $id = 'OnlineStorage'; $link = '#OnlineStorage';
                break;

            case 'other': case 'otros':
                $imag = 'ot'; $title = 'Other'; $titulo = 'Otros'; $id = 'Other'; $link = '#Other';
                break;

            case 'utilities': case 'utilidades':
                $imag = 'utl'; $title = 'Utilities'; $titulo = 'Utilidades'; $id = 'Utilities'; $link = '#Utilities';
                break;

            case 'compression': case 'compresion':
                $imag = 'press'; $title = 'Compression'; $titulo = 'Compresión'; $id = 'Compression'; $link = '#Compression';
                break;

            case 'developertools': case 'herramientasparadesarrollar':
                $imag = 'dv'; $title = 'Developer Tools'; $titulo = 'Herramientas de Desarrollo'; $id = 'DeveloperTools'; $link = '#DeveloperTools';
                break;

                default: "code";    $imag='code';          $link='#title';
                        break;
                endswitch;
            endif;
            ?>
            <a href="<?php if(!empty($link)){echo$link;}else{echo"#title";} ?>">
                <img src="https://latinospc.com/images/programs/<?= $imag; ?>.jpg" width="263" height="670"
                    alt="<?php if(!empty($title)){echo$title;}else{echo"image";} ?>" class="fl" /></a>

            <h2>&larr;
                <?= empty($programs) ? $programas[0] : $programs[0];?>
            </h2>
            <!--Figure out a way that The link will go to the correct page in Spanish or English -->
            <aside class="colms2 buttons">

                <a href="?<?= empty($programs) ? $programas['links'][0] : $programs['links'][0];?>#ps2">
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[1] : $programs[1];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][1] : $programs['links'][1];?>#ps2">
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[2] : $programs[2];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][2] : $programs['links'][2];?>#ps2">
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[3] : $programs[3];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][3] : $programs['links'][3];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[4] : $programs[4];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][4] : $programs['links'][4];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[5] : $programs[5];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][5] : $programs['links'][5];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[6] : $programs[6];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][6] : $programs['links'][6];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[7] : $programs[7];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][7] : $programs['links'][7];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[8] : $programs[8];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][8] : $programs['links'][8];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[9] : $programs[9];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][9] : $programs['links'][9];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[10] : $programs[10];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][10] : $programs['links'][10];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[11] : $programs[11];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][11] : $programs['links'][11];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[12] : $programs[12];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][12] : $programs['links'][12];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[13] : $programs[13];?></button>
                </a>

                <a href="?<?= empty($programs) ? $programas['links'][13] : $programs['links'][13];?>#ps2" >
                    <button type="button"class="bttn"><?= empty($programs) ? $programas[14] : $programs[14];?></button>
                </a>

            </aside>
            <div class="clr"></div>
            <h3><a href="<?php if (key($_GET)){ echo $link; } ?>" class="rm"
                    title="Programs"><?= empty($programs) ? $programas[15] : $programs[15];?></a></h3>
        </div>
    </section>
</article>
<!--Full Bar -->

<article class="fullbar" id="programs"><br />
    <?php if (key($_GET)){ ?>
    <div id="<?= $id ?>" class="hero4 blurb" style="padding-bottom: 3em;">
        <h2><?php if ($sw == 'en'){echo $title;} elseif ($sw == 'es'){echo $titulo;}?></h2>
        <!-- here subtitle for the descriptions is being checked against the Spanish and English versions of the code. -->
        <section tabindex="0" class="selection"><p>
            <?php //INORDER TO GET THE DESIRED SOLUTION HERE, BOTH SPANISH AND ENGLISH IMPLEMENTATIONS HAVE TO BE CONSIDERED, LIKE HOW IM GOING TO CHOOSE BETWEEN THE LANGUAGES BASED ON THE STATE OF THE PAGE,
        //English version
        if ($sw == 'en'){
//IKNOWTHISCODECANBESHORTENEDWITHSOMEALTSYNTAX Also make it readable
/* Click ON antivirus and a window with a description will open.
        Click on the image and it will Take you to a directory inside software called antivirus.
        Read more will do the same.
        */
        if (isset($_GET['antivirus'])) :
                echo $descriptions ['av'];
        

        elseif (isset($_GET['malwarecleaner'])) :
            echo $descriptions ['mlwc'];
            

        elseif (isset($_GET['webbrowsers'])) :
            echo $descriptions ['wb'];
            

        endif;
    }
        //Spanish version
        if ($sw == 'es') {


        if (isset($_GET['antivirus'])) {
        echo 'AV spanish description';
        }
        elseif (isset($_GET['limpiadordemalware'])) {
            echo 'MLWC spanish description';
            }
            elseif (isset($_GET['navegadoresweb'])) {
                echo 'Navegadores Web spanish description';
                }
        }

        ?>
        </p></section><span style="float:right; padding-right: 3em;">read more.</span>
    </div> <?php } ?>
    <br />
    <a href="#software" id="title" class="sub_title">
        When it comes to choosing the right software for the job, there are many factors to consider.</a>
    <div class="spacer">
        <hr />
    </div><br />




    <div class="hero4 blurb">
        <h2>Here are a few steps you can take to help you make the right choice:</h2>
        <section tabindex="0" class="selection">

            <p><strong>Define your requirements:</strong> Clearly define the specific tasks and functionality you need
                the software to perform. This will help you to narrow down your options and make it easier to compare
                different software packages.</p>
            <p><strong>Research available options:</strong> Look into the different software options available that meet
                your requirements. Make a list of the software packages that seem like they would be a good fit.</p>
            <p><strong>Check for compatibility:</strong> Make sure that the software is compatible with your operating
                system and any other software you are currently using. Also check if the software is compatible with
                any hardware you are using as well.</p>
            <p><strong>Read reviews and user feedback:</strong> Read online reviews and user feedback to get an idea of
                how well the software works and how easy it is to use.</p>
            <p>
                <strong>Try before you buy:</strong> Many software vendors offer free trial versions of their software,
                so you can test the software out before you make a purchase.
            </p>
            <p><strong>Consider cost:</strong> Consider the cost of the software, including any additional costs for
                support, upgrades, or additional features. Compare the cost of different software packages and see
                which one offers the best value for your budget.</p>
            <p><strong>Support and updates:</strong> Consider the level of support and updates provided by the software
                vendor. Make sure that the software will continue to be updated and supported in the future.</p>
            <p><strong>Technical requirements:</strong> If you are looking for software that require specific technical
                requirements, make sure that the software you choose meet them, for example if you are developing a
                mobile app, make sure that the software you choose can export the app to the platform you need.</p>

            <h2>Ultimately, the key is to find software that meets your specific needs and fits
                within your budget, while also being easy to use and compatible with your current setup.</h2>
        </section>
    </div> <br />
    <ul tabindex="0" class="selection hero4">
        <a href="#navi">
            <h2>Open source:</h2>
        </a>
        <li class="no-list">This type of software is freely available for use, modification, and distribution. The
            source
            code is also available for users to view and modify.</li>
        <p><a href="#navi">
                <h2>Free:</h2>
            </a>This type of software is also freely available for use, but the source code may not be available
            for modification.</p>
        <p>
        <h2><a href="#navi">Shareware:</h2></a>This type of software is typically available for a free trial
        period, after which the user must purchase a license to continue using the software.</p>
        <p>
        <h2><a href="#navi">Trialware:</h2></a> Similar to shareware, this type of software is available for a
        free trial period, but typically includes more limitations or reduced functionality.</p>
        <p>
        <h2><a href="#navi">Paid:</h2></a> This type of software must be purchased in order to use it.</p>
        <p>
        <h2><a href="#navi">Subscription:</h2></a> This type of software requires a recurring payment (such as a
        monthly or annual fee) in order to continue using the software. Examples include software as a service
        (SaaS) applications.</p>
    </ul>
</article>
<br />

<style>
.selection li {
    list-style: none;
    font-size: 110%;
}

.bttn {
    /*This whole section is for the buttons, I wanted to add a background color to the buttons, but it doesn't let me*/
    font-size: 170%;
    margin: 5.4%;
    padding: 10.4%;
}

.bttn:hover {
    color: midnightblue;
}

button:hover,
button:focus,
button:active {
    border-radius: 25px;
    color: blue;
}
</style>