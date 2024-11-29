<style>
        .crumbs {
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
        .breadcrumb{padding-right:2%;}
</style>

<form id="myForm" method="post">
    <nav class="crumbs">
        <ul class="breadcrumb">
            <li><a href="../#software">Casa</a></li>
            <li><?php
                    $uri = $_SERVER['REQUEST_URI'];
                    $trimmedUri = preg_replace('#^/[^/]+/#', '', $uri);
                    $trimmedUri = rtrim($trimmedUri, '/');
                    $segments = explode('/', $trimmedUri);
                    $lastSegment = end($segments);
                    echo ucfirst($lastSegment);
                ?>
            </li>
            <!-- <li class="active">Dev Tools</li> -->
            <li>
                <select id="programas" name="programas">
                    <option value="all">All</option>
                    <option value="antivirus">Anti-Virus</option>
                    <option value="malware">Limpiadores Malware</option>
                    <option value="webbrowsers">Navegadores Web</option>
                    <option value="messaging">Mensajería</option>
                    <option value="media">Multi-Media</option>
                    <option value="runtimes">Runtimes</option>
                    <option value="imaging">Imágenes</option>
                    <option value="documents">Documentos</option>
                    <option value="filesharing">Compartir Archivos</option>
                    <option value="onlinestorage">Almacenamiento en Linea</option>
                    <option value="other">Otros</option>
                    <option value="utilities">Utilidades</option>
                    <option value="compression">Compresión</option>
                    <option value="devtools">Herramienteas de Desarrollo</option>
                </select>
            </li><input type="submit" value="Go">
        </ul>
    </nav>
</form>