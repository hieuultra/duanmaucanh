<div class="row">
    <div class="row formtitle">
        <h1>THEM TAI KHOAN</h1>
    </div>
    <div class=" row formct">
        <div style="color: red;">
            <?php
            if (isset($tbao) && $tbao != "")
                echo $tbao;
            ?>
        </div>

        <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">

            <div class=" row mb10">
                <p>TEN DANG NHAP <br>
                    <input type="text" name="username" />
                </p>
            </div>
            <div class="row mb10">
                <p>MAT KHAU <br>
                    <input type="text" name="password" />
                </p>
            </div>
            <div class="row mb10">
                <p>HO VA TEN <br>
                    <input type="text" name="hoten" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> EMAIL <br>
                    <input type="text" name="email" width="100px" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> ADDRESS <br>
                    <input type="text" name="address" width="100px" />
                </p>
            </div>
            <div class="row mb10">
                <p>TEL <br>
                    <input type="text" name="tel" />
                </p>
            </div>

            <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

            <input type="submit" value="Them" name="them">

            <input type="submit" value="NHAP LAI" name="nl">
            <a href="index.php?act=dskh">
                <input class="btn" type="button" value="DANH SACH">
            </a>
            <br>

    </div>

    <br>
    </form>
</div>
</div>