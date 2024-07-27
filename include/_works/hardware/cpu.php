<article class="fullbar">
    <section class="hero3 article" style="background-color:DarkSeaGreen;">
        <div class="container">
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
            <ul class="ex_menu" style="text-align:center;padding-bottom: 20px;">
                <li id="cpu" style="display: inline;font-size: xxx-large"><a href="?hw/sw#cpu">
                        <?= empty($title[0]) ? $titulo[0] : $title[0];?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#intel">
                        <?= empty($title[1]) ? $titulo[1] : $title[1];?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#amd">
                        <?= empty($title[2]) ? $titulo[2] : $title[2];?>
                    </a></li>
            </ul>
            <img src="https://latinospc.com/images/computer%20CPU.jpg" alt="" class="fl" height="60" width="60" />
            <p>
                <?= empty($architecture[0]) ? $arquitectura[0] : $architecture[0];?></p>
            <span><?= empty($update[0]) ? $actualizacion[0] : $update[0];?></span>
            <p>
                <?= empty($architecture[1]) ? $arquitectura[1] : $architecture[1];?>
            </p>
            <div class="colms2">
                <ul class="ex_menu">
                    <li>
                        <h2><a href="<?=$links['x86'] ?>" title="Wikipedia">
                                <?= empty($title[3]) ? $titulo[3] : $title[3];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[2]) ? $arquitectura[2] : $architecture[2];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['ARM'] ?>"
                                title="ARM architecture family">
                                <?= empty($title[4]) ? $titulo[4] : $title[4];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[3]) ? $arquitectura[3] : $architecture[3];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['RISCV'] ?>" title="History">
                                <?= empty($title[5]) ? $titulo[5] : $title[5];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[4]) ? $arquitectura[4] : $architecture[4];?>
                        </p>
                        <p>
                            <a href="<?=$links['CUDDGBM'] ?>"
                                title="Concepts of Urban Design By David Gosling, Barry Maitland · 1984">
                                <?= empty($title[6]) ? $titulo[6] : $title[6];?>
                            </a>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['MIPS'] ?>">
                                <?= empty($title[7]) ? $titulo[7] : $title[7];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[5]) ? $arquitectura[5] : $architecture[5];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['POWER'] ?>">
                                <?= empty($title[8]) ? $titulo[8] : $title[8];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[6]) ? $arquitectura[6] : $architecture[6];?>
                        </p>
                    </li>
                    <hr>
                    <p>
                        <?= empty($architecture[7]) ? $arquitectura[7] : $architecture[7];?>
                    </p>
                </ul>
            </div><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/cpu.jpg" height="280px"
                class="fl" title="Central Processing Unit" alt="CPU stiker">
        </div>
    </section>

    <!-- et▄;Gë6T3ï(⌡╦vt⌐Æïÿ|╪╓kÿY╪R+▌╫¥±   ▄;Gë6T3ï(          )             -->
    <section class="hero4 article" style="background-color:whitesmoke;">
        <div class="container">
            <p>
                <?= empty($subTitle[0]) ? $subTitulo[0] : $subTitle[0];?>
            </p>
            <div class="spacer"></div>
            <div class="spacer_shape" id="intel"><a
                    href="<?=$links['intel'] ?>"
                    title="intel Processors"><button style="padding:40px;font-size:xx-large">
                        intel
                    </button></a><a href="#scroll"><img src="https://latinospc.com/images/computer%20CPU.jpg" alt=""
                        class="rtl" height="60" width="60" /></a></div>
            <h2>
                <?= empty($subTitle[1]) ? $subTitulo[1] : $subTitle[1];?>
            </h2>
            <ul style="font-size: 35px; padding: 25px;" class="ex_menu intel_menu">
                <li style="display: inline"><a class="button"
                        href="<?=$links['intel_i3'] ?>">
                        i3</a>
                </li>
                -<li style="display: inline"><a class="button"
                        href="<?=$links['intel_i5'] ?>">
                        i5</a>
                </li>

                -<li style="display: inline"><a class="button"
                        href="<?=$links['intel_i7'] ?>">
                        i7</a>
                </li>

                -<li style="display: inline"><a class="button"
                        href="<?=$links['intel_i9'] ?>">
                        i9</a>
                </li>

                -<li style="display: inline"><a class="button"
                        href="<?=$links['intel_xeon'] ?>">
                        Xeon</a>
                </li>

                -<li style="display: inline"><a class="button"
                        href="<?=$links['intel_mobile'] ?>">
                        Mobile</a>
                </li>
            </ul>
            <p>
                <?= $intel[0]; ?>
            </p>
            <p>
                <?= $intel[1]; ?>
            </p>
            <p>
                <?= $intel[2]; ?>
            </p>
            <h2>
                <?= $intel[3]; ?>
            </h2>
            <ul class="ex_menu">
                <li>
                    <h2 class="intelletters">Core i3:</h2>
                    <p>
                        <?= $intel[4]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i5:</h2>
                    <p>
                        <?= $intel[5]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i7:</h2>
                    <p>
                        <?= $intel[6]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i9:</h2>
                    <p>
                        <?= $intel[7]; ?>
                </li>
                </p>

                <li>
                    <h2 class="intelletters">intel Xeon:</h2>
                    <p>
                        <?= $intel[8]; ?>

                        <span
                            style="font-size: larger;"><?= empty($subTitle[2]) ? $subTitulo[2] : $subTitle[2];?></span>

                <li>
                    <p><?= $intel[9]; ?></p>
                </li>
                <li>
                    <p><?= $intel[10]; ?></p>
                </li>
                <li>
                    <p><?= $intel[11]; ?></p>
                </li>

                <p><?= $intel[12]; ?></p>
                </li>
                </p>
            </ul>
            <hr>
            <div class="spacer_shape">
                <p><?= $lga[0]; ?> <a href="<?=$links['LGA'] ?>" title="Digital Trends"><?= $lga[1]; ?></a></p>
                <p><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/socket.jpg"
                        title="Socket" class="rtl">
                    <?= $lga[2]; ?></p>
            </div>

            <p>
                <?= $lga[3]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1700:</strong> [V] <?= $lga[4]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1200:</strong> [H5] <?= $lga[5]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2011:</strong> [R] <?= $lga[6]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2066:</strong> [R4] <?= $lga[7]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 3647:</strong> [P, P0, P1] <?= $lga[8]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 4189:</strong> [P+] <?= $lga[9]; ?>
            </p>
        </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <div class="article">
        </div>
    </section>


    <section class="hero4 article" style="background-color:wheat;">
        <div class="container">
            <div class="spacer_mega"></div>
            <div class="spacer_shape" id="amd"><a href="<?=$links['AMD'] ?>" title="AMD Processors">
                    <button style="padding:40px;font-size:xx-large">
                        <?= empty($title[2]) ? $titulo[2] : $title[2];?>
                    </button></a><a href="#scroll"><img src="https://latinospc.com/images/computer%20CPU.jpg"
                        alt="CPU Image" class="rtl" height="60" width="60" /></a></div>
            <div class="spacer"></div>
            <div class="colms2">
                <p><a href="<?=$links['AMD_epyc'] ?>" title="Epyc™"><button>
                            <p class="button_red">
                            <div class="amdletters">
                                <ol class="ex_menu"><?= $amd[0]; ?></ol>
                                <br /><?= $amd[1]; ?><br />
                                <br /><?= $amd[2]; ?><br />
                                <br /><?= $amd[3]; ?><br />
                                <br /><?= $amd[4]; ?>
                            </div>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_WS'] ?>" title="Ryzen™ & Threadripper™"><button>
                            <p class="button_red">
                            <div class="amdletters">
                                <ol><?= $amd[5]; ?></ol>
                                <br /><?= $amd[6]; ?><br />
                                <br /><?= $amd[7]; ?><br />
                                <br /><?= $amd[8]; ?>
                            </div>
                </p>
                </button></a></p>
            </div>

            <div class="colms2">
                <p><a href="<?=$links['AMD_embedded'] ?>" title="Embedded"><button>
                            <p class="button_red">
                            <ul class="ex_menu"><?= $amd[9]; ?>
                                <li><a href="<?=$links['AMD_embeddedEpyc'] ?>" class="amdletters"
                                        title="EPYC™"><?= $amd[10]; ?></a></li>
                                <li><a href="<?=$links['AMD_embededRyzen'] ?>" class="amdletters"
                                        title="Ryzen™"><?= $amd[11]; ?></a></li>
                                <?= $amd[12]; ?>
                            </ul>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_laptop'] ?>" title="Laptop"><button>
                            <p class="button_red">
                            <ul class="amdletters ex_menu"><?= $amd[13]; ?>
                                <li><a href="<?=$links['AMD_RyzenPro_laptop'] ?>"
                                        class="amdletters" title="Mobile Pro Business"><?= $amd[14]; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopBusiness'] ?>"
                                        class="amdletters" title="Mobile Business"><?= $amd[15]; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopRyzen'] ?>"
                                        class="amdletters" title="Mobile"><?= $amd[16]; ?></a></li>
                                <li><a href="<?=$links['AMD_athlon'] ?>" class="amdletters"
                                        title="Mobile Athlon™"><?= $amd[17]; ?></a></li>
                            </ul>
                </p>
                </button></a></p>
            </div>

            <p><a href="<?=$links['AMD_desktop'] ?>" title="Desktop"><button>
                        <p class="button_red">
                        <ul class="ex_menu"><?= $amd[18]; ?>
                            <li><a href="<?=$links['AMD_threadripperPro'] ?>"
                                    title="Ryzen™ Threadripper™ PRO" class="amdletters"><?= $amd[19]; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenPro'] ?>" title="Ryzen™ PRO"
                                    class="amdletters"><?= $amd[20]; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonPro'] ?>" title="Athlon™ PRO"
                                    class="amdletters"><?= $amd[21]; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenThreadripper'] ?>" title="High End"
                                    class="amdletters"><?= $amd[22]; ?></a></li>
                            <li><a href="<?=$links['AMD_Ryzen'] ?>" title="AMD Ryzen™ Processors"
                                    class="amdletters"><?= $amd[23]; ?></a></li>
                            <li><a href="<?=$links['AMD_RyzenG'] ?>"
                                    title="AMD Ryzen™ with Graphics" class="amdletters"><?= $amd[24]; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonDesktop'] ?>"
                                    title="AMD Athlon™ with Radeon™ Graphics" class="amdletters"><?= $amd[25]; ?></li>
                        </ul>
            </p>
            </button></a></p>
            <ul class="ex_menu">
                <li class="card2">
                    <h2><?= empty($subTitle[3]) ? $subTitulo[3] : $subTitle[3];?></h2><br /><br /><?= $amd[26]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_sWRX80'] ?>" title="sWRX80"
                            class="amdred">sWRX80:</a></strong> <?= $amd[27]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_TRX40'] ?>" title="TRX40"
                            class="amdred">sTRX40:</a></strong> <?= $amd[28]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_X399'] ?>" title="X399" class="amdred">TR4
                            X399:</a></strong> <?= $amd[29]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM5'] ?>" title="AM5" class="amdred">AM5:</a></strong>
                    <?= $amd[30]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM4'] ?>" title="AM4"
                            class="amdred">AM4:</a></strong> <?= $amd[31]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM3+'] ?>" title="AM3+"
                            class="amdred">AM3+:</a></strong> <?= $amd[32]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_FM2+'] ?>" title="FM2+"
                            class="amdred">FM2+:</a>
                    </strong> <?= $amd[33]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_SP3'] ?>" title="SP3" class="amdred">SP3:</a></strong>
                    <?= $amd[34]; ?>
                </li>
            </ul>
        </div>
        <section class="hero4 article">
            <div class="container">

                <h2><?= $cpu[0]; ?></h2>
                <p>
                    <?= $cpu[1]; ?>
                </p>

                <h2><?= $cpu[2]; ?></h2>
                <p>
                    <?= $cpu[3]; ?>
                </p>

                <h2><?= $cpu[4]; ?></h2>
                <p>
                    <?= $cpu[5]; ?>
                </p>

                <h2><?= $cpu[6]; ?></h2>
                <p>
                    <?= $cpu[7]; ?>
                </p>
                <p>
                    <?= $cpu[8]; ?>
                </p>
                <p>
                    <?= $cpu[9]; ?>
                </p>
            </div>
        </section>
        <section class="container">
        <p style="font-size: xx-large;color:red;"><?= $mobile[0]; ?>
        </p>
        <p>
            <?= $mobile[1]; ?>
        </p>
        <h2 class="qualcomm">Qualcomm Snapdragon:</h2>
        <p>
            <?= $mobile[2]; ?>
        </p>
        <h2 class="samsung">Samsung Exynos:</h2>
        <p>
            <?= $mobile[3]; ?>
        </p>
        <h2 class="apple">Apple A-series:</h2>
        <p>
            <?= $mobile[4]; ?>
        </p>
        <h2 class="huawei">Huawei Kirin:</h2>
        <p>
            <?= $mobile[5]; ?>
        </p>
        <h2>MediaTek:</h2>
        <p>
            <?= $mobile[6]; ?>
        </p>
        <h2>Microchip Technology:</h2>
        <p><?= $mobile[7]; ?></p>
        <p>
        <p><?= $mobile[8]; ?></p>
        </p>
        <p><?= $mobile[9]; ?></p>
</section>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        </div>
    </section>
</article>