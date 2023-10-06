<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">SAN PHAM:<strong><?= $tendm ?></strong> </div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $s) {
                    extract($s);
                    $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
                    $hinh = $img_path . $image;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i = 11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="boxsp ' . $mr . '">
   <div class="row img">
   <a class="linksp" href="' . $linksp . '">
       <img src="' . $hinh . '" />
 </a>
   </div>
   <p class="tien">' . $price . '$' . '</p>
   <a class="linksp" href="' . $linksp . '">' . $name . ' </a>
 </div>';
                    $i += 1;
                }

                ?>
            </div>
        </div>


    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>