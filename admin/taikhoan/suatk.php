<?php
if (is_array($suatk)) {
    extract($suatk);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>CAP NHAP TAI KHOAN</h1>
    </div>
    <div class=" row formct">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <div class="mb 10">
            <label for="">VAI TRO:</label>
            <select name="id_role" id="">
                <option value="0" selected>TAT CA</option>
                <?php
                foreach ($dsrl as $ds) {

                    if ($ds['id_role'] == $role) $s = "selected";
                    else $s = "";
                    echo '<option value="' . $ds['id_role'] . '" ' . $s . '>' . $ds['name_role'] . '</option>';
                }
                ?>
            </select>
            </div>
     
            <div class=" row mb10">
                <p>TEN DANG NHAP <br>
                    <input type="text" name="username" value="<?= $username ?>" />
                </p>
            </div>
            <!-- <div class="row mb10">
                <p>MAT KHAU <br>
                    <input type="text" name="password" value="<?= $password ?>" />
                </p>
            </div> -->
            <div class=" row mb10">
                <p class="mhh"> HINH <br>
                    <input type="file" name="hinh" width="100px" value="" />
                    <?= $hinh ?>
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> EMAIL <br>
                    <input type="text" name="email" width="100px" value="<?= $email ?>" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> ADDRESS <br>
                    <input type="text" name="address" width="100px" value="<?= $address ?>" />
                </p>
            </div>
            <div class="row mb10">
                <p>TEL <br>
                    <input type="text" name="tel" value="<?= $tel ?>" />
                </p>
            </div>

            <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

            <input type="hidden" name="id_tk" value="<?= $id_tk ?>">

            <input type="submit" value="Cap nhap" name="capnhap">

            <input type="submit" value="NHAP LAI" name="nl">
            <a href="index.php?act=dskh">
                <input class="btn" type="button" value="DANH SACH">
            </a>
            <br>
            <br>
        </form>
    </div>
    <?php
    if (isset($tbao) && $tbao != "")
        echo $tbao;
    ?>
</div>
</div>