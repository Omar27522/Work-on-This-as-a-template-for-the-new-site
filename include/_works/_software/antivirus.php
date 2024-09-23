<article class="hero4">
    <style>
    h2 {
        Padding-left: 20%;
    }
    </style>
    <div class=" fullbar">
        <div style="display:inline-block;">
            <a href="../#ps2">
                <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
            </a>
        </div>
        <p tabindex="0" class="selection"><?= $av[0]; ?><br /><br /><?= $av[1]; ?><br /><br /><?= $av[2];?></p>

        <section tabindex="0" class="selection">
            <p><strong><?= empty($history) ?$historia[0]: $history[0];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['oldDays'];?></p>
            <p><strong><?= empty($history) ?$historia[1]: $history[1];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['fromMto_M'];?></p>
            <p><strong><?= empty($history) ?$historia[2]: $history[2];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['wildWest'];?></p>
            <p><strong><?= empty($history) ?$historia[3]: $history[3];?>:</strong>
                <?= empty($history) ?$historia['_']: $history['digitalCastle'];?></p>
        </section>

        <h2><?= empty($tips) ? $consejos['titulo'] : $tips['title'];?></h2>
        <section>
            <p class="colms2">
                <span tabindex="0" class="selection_2">
                    <?= empty($tips) ? $consejos[0] : $tips[0];?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= empty($tips) ? $consejos[1] : $tips[1];?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= empty($tips) ? $consejos[2] : $tips[2];?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= empty($tips) ? $consejos[3] : $tips[3];?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= empty($tips) ? $consejos[4] : $tips[4];?></span>
            </p>
            <div tabindex="0" class="selection">
                <p><strong><?= empty($tips) ? $consejos[5] : $tips[5];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['safe']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[6] : $tips[6];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['updates']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[7] : $tips[7];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['passwords']; ?></p>
                <p><strong><?= empty($tips) ? $consejos[8] : $tips[8];?>:</strong>
                    <?= empty($tips) ? $consejos['_'] : $tips['backup']; ?></p>
            </div>
        </section>
    </div><!-- /fullbar -->
    <div class="spacer">
        <hr />
    </div>
    <div class="blurb fullbar hero4">
        <h2>Antivirus Features</h2>
        <section tabindex="0" class="selection">
            <p><strong>Real-time protection:</strong> Constantly monitors your system for threats, blocking them before
                they can cause damage.</p>
            <p><strong>Firewall:</strong> Acts as a security barrier, protecting your computer from unauthorized network
                access.</p>
            <p><strong>Phishing protection:</strong> Identifies and blocks fraudulent attempts to steal your personal
                information.</p>
            <p><strong>Ransomware protection:</strong> Detects and prevents ransomware attacks, safeguarding your files.
            </p>
            <p><strong>Performance impact:</strong> Offers strong protection without significantly slowing down your
                computer.</p>
        </section>
        <h2>Common Antivirus Questions</h2>
        <section tabindex="0" class="selection">
            <p><strong>Is a paid antivirus really necessary?</strong> While free options exist, paid antivirus solutions
                often offer more comprehensive protection, advanced features, and dedicated customer support.</p>
            <p><strong>What are the key benefits of paid antivirus software?</strong> Paid antivirus typically includes
                features like real-time protection, firewalls, anti-phishing, ransomware protection, VPN access,
                password managers, and cloud storage.</p>
            <p><strong>How much does a good antivirus program cost?</strong> Prices vary based on the features and
                number of devices covered. Many offer flexible subscription plans.</p>
            <p><strong>Is it worth paying for extra features like VPN and password management?</strong> It depends on
                your needs. If you value online privacy and convenience, these features can be beneficial.</p>
            <p><strong>Can I rely solely on my operating system's built-in protection?</strong> While operating systems
                offer some protection, a dedicated antivirus provides more robust security.</p>
        </section>
    </div>
</article>