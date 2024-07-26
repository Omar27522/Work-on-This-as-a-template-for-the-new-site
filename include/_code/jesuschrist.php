<li id="scroll" class="<?= $js="current dropdown"; ?>"><a class="dropbtn" onclick="myFunction()">Jesus Christ</a>
                <div class="dropdown-content" id="myDropdown">
                <a href="https://latinospc.com" style="display: inline" class="image">
                <?php
                $pictures= array('1','2','3','4','5','6','7','8','9','10','11','12');
                echo"<img src=\"https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb";
                for($i=0; $i<1; $i++){
                    shuffle($pictures);
                echo $pictures[$i];}
                echo".webp\" width=\"372px\" height=\"248px\" alt=\"CPUimage\" style=\"padding-top: 15px;padding-left:20px;\"/>";
                ?>
                </a>
                <div class="rtl"style="padding-top: 30px;padding-right:20px;"><a href="../">Backups</a>
                  <a href="../">Programs</a>
                  <a href="../" title="Anatomy of a Computer">Anatomy</a>
                  <a href="../">Notebooks</a>
                  <a href="#link11" title="Cables and Connectors">Cables</a>
                </div><div style="margin-top: 30px">
                <a href="../">Websites</a>
                <a href="../">Passwords</a>
                <a href="../">Tutorials</a><img src="https://latinospc.com/images/100.png" class="rtl" style="translate: -40% -50%"  alt="CPUimage"width="200px" />
                <a href="../">Images</a>
                <a href="../">Artwork</a>
                <a href="../">Writing</a>
                      </div>
                </div>
              </li>

<!-- <input type="checkbox" id="leftArrow" name="ImagePrevious" value="boldText">-->
              <?php
              /*This is the Idea I have in mind.
              Make 2 checkboxes, one at each side of the image.
              These checkboxes will be left and right arrows that can scroll through the image gallery.
              PHP will detect when the checkbox is pressed and will run a script that will output the next image.
              echo 'Que pasa aqui?
              The test did not work.

              */
              ?>