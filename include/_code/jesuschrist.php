<li class="<?= $js="current dropdown"; ?>"><a class="dropbtn" onclick="myFunction()">Jesus Christ</a>
                <div class="dropdown-content" id="myDropdown">
                <a href="<?= $directoryPath; ?>?Jesus" style="display: inline;background-image:none;background-color:#f9f9f9;">
                <?php
                $pictures= array('1','2','3','4','5','6','7','8','9','10','11','12');
                echo"<img src=\"https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb";
                for($i=0; $i<1; $i++){
                    shuffle($pictures);
                echo $pictures[$i];}
                echo".webp\" width=\"372px\" height=\"248px\" alt=\"Jesus Christ\" style=\"margin-top: 15px;margin-left:20px;\" class=\"image\"/>";
                ?>
                </a>
                <div class="rtl"style="padding-top: 30px;padding-right:20px;"><a href="<?= $directoryPath; ?>?backups">Backups</a>
                  <a href="<?= $directoryPath; ?>software/#ps2" title="Programs">Programs</a>
                  <a href="<?= $directoryPath; ?>hardware/#article" title="Anatomy of a Computer">Anatomy</a>
                  <a href="<?= $directoryPath; ?>hardware/notebooks/#article" title="Notebooks">Notebooks</a>
                  <a href="<?= $directoryPath; ?>hardware/cables/#article" title="Cables and Connectors">Cables</a>
                </div><div style="margin-top: 30px">
                <a href="<?= $directoryPath; ?>software/websites/#article">Websites</a>
                <a href="<?= $directoryPath; ?>software/passwords/#article">Passwords</a>
                <a href="<?= $directoryPath; ?>about/tutorials/#article">Tutorials</a><a href="include" style="float: right;display: inline;background-image:none;background-color:#f9f9f9;"><img src="<?= $directoryPath; ?>include/_images/100.webp" class="rtl image" style="translate: -40% -50%; border-radius: 110%;"  alt="CPUimage"width="200px" /></a>
                <a href="<?= $directoryPath; ?>about/images/#article">Images</a>
                <a href="<?= $directoryPath; ?>about/artwork/#article">Artwork</a>
                <a href="<?= $directoryPath; ?>about/writing/#article">Writing</a>
                      </div>
                </div>
              </li>
              <?php
              /*

              */
              ?>