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



<form id="myForm" method="post">
<nav class="crumbs">
                    <ul class="breadcrumb">
                        <li><a href="../#software">Home</a></li>
                        <li>
                        <?php
                            $uri = $_SERVER['REQUEST_URI'];
                            $trimmedUri = preg_replace('#^/[^/]+/#', '', $uri);
                            $trimmedUri = rtrim($trimmedUri, '/');
                            $segments = explode('/', $trimmedUri);
                            $lastSegment = end($segments);
                            echo ucfirst($lastSegment);
                        ?>
                        </li>
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