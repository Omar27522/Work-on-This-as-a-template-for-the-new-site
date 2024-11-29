<style>.crumbs {
            /* The Whole Nav*/
            color: rgb(3, 49, 33);
            font-size: 16px;
            text-align: right;
        }

        .crumbs li {
            /* Every Item on the nav*/
            display: inline-block;
        }

        .crumbs li a:hover {
            color: rgb(0, 255, 166);
            text-decoration-line: overline;
        }

        .crumbs li a {
            /* Every Item on the nav that is a link*/
            text-decoration-line: none;
        }

        .crumbs li::after {
            /* The separator between the items*/
            content: " ➪";
        }

        .crumbs li:last-child::after {
            /* The separator between the items*/
            content: "";
        }

        .crumbs .active {
            /* The item that is active most of the time it will not be a link */
            color: red;
        }
        .breadcrumb{padding-right:2%;}</style>

<?php

if (isset($_POST['program'])) { //Refreshes the page if the criteria is met after the form is submitted
    $pages = [
        'all'             =>    './#ps2',
        'devtools'        =>    './developertools',
        'compression'     =>    './compression',
        'utilities'       =>    './utilities',
        'other'           =>    './other',
        'filesharing'     =>    './filesharing',
        'onlinestorage'   =>    './onlinestorage',
        'documents'       =>    './documents',
        'imaging'         =>    './imaging',
        'runtimes'        =>    './runtimes',
        'media'           =>    './media',
        'messaging'       =>    './messaging',
        'webbrowsers'     =>    './webbrowsers',
        'malware'         =>    './malwarecleaner',
        'antivirus'       =>    './antivirus'
    ];

    if (array_key_exists($_POST['program'], $pages)) {
        header("Location: " . $pages[$_POST['program']]);
        exit;
    }
}

?>

<form id="myForm" method="post">
<nav class="crumbs">
                    <ul class="breadcrumb">
                        <li><a href="./#software">Home</a></li>
                        <li><?= ucfirst(preg_replace('#^/[^/]+/#', '', $_SERVER['REQUEST_URI'])); ?></li>
                        <!-- <li class="active">Dev Tools</li> -->
                        <li> <select id="programs" name="program">
                                <option value="all">All</option>
                                <option value="antivirus">Anti-Virus</option>
                                <option value="malware">Malware Cleaners</option>
                                <option value="webbrowsers">Web Browsers</option>
                                <option value="messaging">Messaging</option>
                                <option value="media">Media</option>
                                <option value="runtimes">Runtimes</option>
                                <option value="imaging">imaging</option>
                                <option value="documents">Documents</option>
                                <option value="filesharing">File Sharing</option>
                                <option value="onlinestorage">Online Storage</option>
                                <option value="other">Other</option>
                                <option value="utilities">Utilities</option>
                                <option value="compression">Compression</option>
                                <option value="devtools">Development Tools</option>
                            </select> </li> <input type="submit" value="Go">
                    </ul>
                </nav>
            </form>