<article class="hero4 container">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <style>
    ul h2 {
        font-size: larger;
        text-transform: uppercase;
        color: #386baa;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        margin-top: 0;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        break-inside: avoid-column;
    }

    /*This I got it straight from jsk*/
    .container li {
        list-style-type: none;
    }

    .colms2 .card2 {
        background-color: #DBE9FA;
        break-inside: avoid-column;
    }

    .fl {
        margin: 4px 16px 4px 0;
        float: left;
    }

    .rtl {
        margin: 4px 4px 16px 0;
        float: right;
    }

    .cooler_button {
        text-align: center;
        background-color: #91c9b7;
        display: flex;
        flex-direction: column;
    }

    .cooler2_button :hover {
        background-color: #b3f6e0;
        cursor: pointer;
    }

    .cooler_button :hover {
        background-color: #b3f6e0;
        cursor: pointer;
    }
    </style>
    <a href="./#peripherals">
        <h2 id="cooler"><?= empty($titles[0]) ? $titulos[0] : $titles[0];?></h2>
    </a>
    <section>
        <p><a href="#fans"><?= empty($titles[1]) ? $titulos[1] : $titles[1];?></a> <a
                href="#liquid-coolers"><?= empty($titles[20]) ? $titulos[20] : $titles[20];?></a> <a
                href="#solid-state-coolers"><?= empty($titles[2]) ? $titulos[2] : $titles[2];?></a>&nbsp;<a
                href="#TECS"><?= empty($titles[21]) ? $titulos[21] : $titles[21];?></a>&nbsp;<a
                href="#phase-change-cooling"><?= empty($titles[3]) ? $titulos[3] : $titles[3];?></a></p>
        <p class="container"><a href="<?= empty($links[0]) ? $links[0] : $links[0];?>"
                style="font-size: x-large;"><?= empty($titles[4]) ? $titulos[4] : $titles[4];?></a>
            <?= empty($coolers['coolers']) ? $enfriador['enfriador'] : $coolers['coolers'];?></p>
        <div class="container">
            <div class="rtl"><a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/coolers.jpg"
                    title="Chilling Cooler"><img src="https://latinospc.com/images/hardware/hw/cooling/coolers.webp"
                        alt="Chilling Cooler"></a></div>
            <p><span style="font-size: x-large;"><?= empty($titles[5]) ? $titulos[5] : $titles[5];?></span>
                <?= empty($coolers['passiveAndActivePassive']) ? $enfriador['pasivoYActivoPasivo'] : $coolers['passiveAndActivePassive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[18]) ? $titulos[18] : $titles[18];?></span>
                <?= empty($coolers['passiveAndActiveActive']) ? $enfriador['pasivoYActivoActivo'] : $coolers['passiveAndActiveActive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[19]) ? $titulos[19] : $titles[19];?></span>
                <?= empty($coolers['types']) ? $enfriador['tipos'] : $coolers['types'];?></p>
            <p>&nbsp;<a href="<?= empty($links[1]) ? $links[1] : $links[1];?>"
                    title="VIDEO"><?= empty($coolers['air']) ? $enfriador['aire'] : $coolers['air'];?></a>
                <?= empty($coolers['common']) ? $enfriador['comun'] : $coolers['common'];?>
            </p>
            <p>&nbsp;<a href="<?= empty($links[2]) ? $links[2] : $links[2];?>"
                    title="VIDEO"><?= empty($coolers['liquid']) ? $enfriador['liquido'] : $coolers['liquid'];?></a>
                <?= empty($coolers['pump']) ? $enfriador['bomba'] : $coolers['pump'];?></p>
            <p><a href="<?= empty($links[3]) ? $links[3] : $links[3];?>">
                    <?= empty($coolers['thermoelectric']) ? $enfriador['termoelectrico'] : $coolers['thermoelectric'];?></a>
                <?= empty($coolers['peltier']) ? $enfriador['peltier'] : $coolers['peltier'];?></p>
            <p><span style="font-size: x-large;"><?= empty($titles[22]) ? $titulos[22] : $titles[22];?></span>
                <?= empty($coolers['ssc']) ? $enfriador['ees'] : $coolers['ssc'];?></p>
        </div>
        <details>
            <summary style="text-align: center;" class="hero4 cooler_button cooler2_button">
                <h2 id="Laser-Cooling" style="display: inline-block;">
                    <?= empty($titles[17]) ? $titulos[17] : $titles[17];?></h2>
                <?php
                /*<a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/lazer.jpg"
                    title="Laser Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/lazer.webp" alt="Laser Cooling"
                        height="30px" style="transform: translate(175px, 10px);"></a>*/
                        ?>
            </summary>
            <fieldset class="container card2"><a rel="example_group"
                    href="https://latinospc.com/images/hardware/hw/cooling/lasers.jpg" title="Laser Cooling"
                    class="rtl"><img src="https://latinospc.com/images/hardware/hw/cooling/lasers.webp"
                        alt="Laser Cooling" height="120px"></a>
                <p>
                    <?= empty($coolers['laserCooling']) ? $enfriador['enfriadorLaser'] : $coolers['laserCooling'];?>
                </p>
                <p>
                <dl>
            </fieldset>
            <fieldset class="container card2">
                <legend>
                    <p><?= empty($titles[6]) ? $titulos[6] : $titles[6];?></p>
                </legend>
                <dt><a href="<?= empty($links[4]) ? $links[4] : $links[4];?>">
                        <?= empty($titles[7]) ? $titulos[7] : $titles[7];?></a>
                </dt>
                <dd><?= empty($coolers['dopplerCooling']) ? $enfriador['enfriadorDoppler'] : $coolers['dopplerCooling'];?>
                </dd>
                <dt><a href="<?= empty($links[5]) ? $links[5] : $links[5];?>">
                        <?= empty($titles[23]) ? $titulos[23] : $titles[23];?></a>
                </dt>
                <dd>
                    <?= empty($coolers['sisyphus']) ? $enfriador['sisyphus'] : $coolers['sisyphus'];?>
                </dd>
                <dt><a href="<?= empty($links[6]) ? $links[6] : $links[6];?>">
                        <?= empty($titles[24]) ? $titulos[24] : $titles[24];?></a></dt>
                <dd>
                    <?= empty($coolers['evaporative']) ? $enfriador['evaporativo'] : $coolers['evaporative'];?>
                </dd>
                <dl>
                    </p>
        </details>
        </fieldset>
        <p class="container card2">
            <?= empty($coolers['laserCoolingSummary']) ? $enfriador['resumenEnfriadorLaser'] : $coolers['laserCoolingSummary'];?>
        </p>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Cooling Devices -->
        <br />
    </section>
    <section>
        <details>
            <summary class="cooler_button cooler2_button center">
                <h2><?= empty($titles[8]) ? $titulos[8] : $titles[8];?></h2>
            </summary>
            <ul class="container colms2">
                <li class="card2">
                    <h2 id="fans"><?= empty($titles[9]) ? $titulos[9] : $titles[9];?></h2>
                    <p><?= empty($coolers['airCooling']) ? $enfriador['enfriadoAire'] : $coolers['airCooling'];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/aircool.jpg"
                        class="fl" title="Air Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/aircool.webp" height="100px"
                            alt="Air Cooling"></a>
                    <p><?= empty($coolers['airCooling2']) ? $enfriador['enfriadoAire2'] : $coolers['airCooling2'];?></p>
                </li>
                <li class="card2">
                    <h2 id="liquid-coolers"><?= empty($titles[10]) ? $titulos[10] : $titles[10];?></h2>
                    <p><?= empty($coolers['liquidCooling']) ? $enfriador['enfriadoLiquido'] : $coolers['liquidCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/liquid.jpg" class="fl"
                        title="Liquid Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/liquid.webp"
                            height="100px" alt="Liquid Cooling"></a>
                    <p><?= empty($coolers['liquidCooling2']) ? $enfriador['enfriadoLiquido2'] : $coolers['liquidCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="solid-state-coolers"><?= empty($titles[11]) ? $titulos[11] : $titles[11];?></h2>
                    <p><?= empty($coolers['solidStateCooling']) ? $enfriador['enfriadoEstadoSolido'] : $coolers['solidStateCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/ssc.jpg" class="fl"
                        title="Solid-State Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/ssc.webp"
                            height="100px" alt="Solid-State Cooling"></a>
                    <p><?= empty($coolers['solidStateCooling2']) ? $enfriador['enfriadoEstadoSolido2'] : $coolers['solidStateCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="TECS"><?= empty($titles[12]) ? $titulos[12] : $titles[12];?></h2>
                    <p><?= empty($coolers['tec'][0]) ? $enfriador['tec'][0] : $coolers['tec'][0];?>
                        <a href="<?= empty($links[7]) ? $links[7] : $links[7];?>">
                            <?= empty($coolers['tec'][1]) ? $enfriador['tec'][1] : $coolers['tec'][1];?></a>
                        <?= empty($coolers['tec'][2]) ? $enfriador['tec'][2] : $coolers['tec'][2];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/tec.jpg" class="rtl"
                        title="Thermoelectric Coolers"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/tec.webp" height="100px"
                            alt="TECs"></a>
                    <p><?= empty($coolers['tec'][3]) ? $enfriador['tec'][3] : $coolers['tec'][3];?></p>
                </li>
                <li class="card2">
                    <h2 id="hybrid-coolers"><?= empty($titles[13]) ? $titulos[13] : $titles[13];?></h2>
                    <p><?= empty($coolers['hybrid'][0]) ? $enfriador['hibrido'][0] : $coolers['hybrid'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/hybrid.jpg"
                        class="rtl" title="Hybrid Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/hybrid.webp" height="100px"
                            alt="Hybrid Cooling"></a>
                    <p><?= empty($coolers['hybrid'][1]) ? $enfriador['hibrido'][1] : $coolers['hybrid'][1];?></p>
                </li>
                <li class="card2">
                    <h2 id="phase-change-cooling"><?= empty($titles[14]) ? $titulos[14] : $titles[14];?></h2>
                    <p><?= empty($coolers['pcc'][0]) ? $enfriador['pcc'][0] : $coolers['pcc'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/pcc.jpg" class="rtl"
                        title="Phase Change Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/pcc.webp" height="100px"
                            alt="Phase Change Cooling"></a>
                    <p><?= empty($coolers['pcc'][1]) ? $enfriador['pcc'][1] : $coolers['pcc'][1];?></p>
                </li>
            </ul>
        </details>
        <dl>
            <dt>
                <h2><?= empty($titles[25]) ? $titulos[25] : $titles[25];?></h2>
            <dt>
                <p>
            <dd><strong><?= empty($titles[26]) ? $titulos[26] : $titles[26];?></strong>
                <?= empty($coolers['factors'][0]) ? $enfriador['factores'][0] : $coolers['factors'][0];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[27]) ? $titulos[27] : $titles[27];?></strong>
                <?= empty($coolers['factors'][1]) ? $enfriador['factores'][1] : $coolers['factors'][1];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[28]) ? $titulos[28] : $titles[28];?></strong>
                <?= empty($coolers['factors'][2]) ? $enfriador['factores'][2] : $coolers['factors'][2];?></dd>
            </p>
            <dt>
                <h2><?= empty($titles[15]) ? $titulos[15] : $titles[15];?></h2>
            </dt>
            <p>
                <dd><?= empty($coolers['factors'][3]) ? $enfriador['factores'][3] : $coolers['factors'][3];?>
                </dd>
                <dd><?= empty($coolers['factors'][4]) ? $enfriador['factores'][4] : $coolers['factors'][4];?></dd>
            </p>
        </dl>
        <h2><?= empty($titles[16]) ? $titulos[16] : $titles[16];?></h2>
        <p><?= empty($coolers['factors'][5]) ? $enfriador['factores'][5] : $coolers['factors'][5];?></p>
    </section>
</article>