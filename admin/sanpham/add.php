<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
    $().ready(function() {
        // Thêm một quy tắc tùy chỉnh cho price
        $.validator.addMethod("positiveNumber", function(value, element) {
            return Number(value) > 0;
        }, "Price phải là số dương");
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "tensp": {
                    required: true,
                },
                "price": {
                    required: true,
                    positiveNumber: true
                },
                "gg": {
                    required: true,
                },
                "img ": {
                    required: true,
                },
                "mota": {
                    required: true,
                }
            },
            messages: {
                "tensp ": {
                    required: "Bắt buộc nhập username",
                    maxlength: "Hãy nhập tối đa 10 ký tự"
                },
                "price": {
                    required: "Bắt buộc nhập password",
                    positiveNumber: "Price phải là số dương"
                },
                "gg ": {
                    required: "Bắt buộc nhập giảm giá ",

                },
                "img ": {
                    required: "Bắt buộc nhập hình ",
                },
                "mota": {
                    required: "Bắt buộc nhập mô tả ",
                }
            }
        });
    });
</script>
<style>
    label.error {
        color: red;
    }
</style>
<div class="r">
    <div class="row formtitle">
        <h1>THEM MOI HANG HOA</h1>
    </div>
    <div class=" boxtr">

        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" id="demoForm">
            <div class="mb10">
                <p class="mhh"> DANH MUC <br>
                    <select name="id_dm" id="">
                        <?php
                        foreach ($dslh as $ds) {
                            extract($ds);
                            echo '<option value="' . $id_dm . '">' . $name . '</option>';
                        }
                        ?>
                    </select>
                </p>
            </div>
            <div class=" mb10">
                <p>GIAM GIA <br>
                    <input type="text" name="gg" />
                </p>
            </div>
            <div class="mb10">
                <p>HANG DAC BIET? <br>
                <div class="hdb">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hdb">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Dac biet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hdb" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Binh thuong
                        </label>
                    </div>
                </div>
                </p>
            </div>
    </div>

    <div class=" boxtr">
        <div class="mb10">
            <p class="mhh"> TEN HANG HOA <br>
                <input type="text" name="tensp" width="100px" />
            </p>
        </div>
        <div class=" mb10">
            <p>HINH ANH <br>
            <div class="hdb">
                <input type="file" name="img" />
            </div>
            </p>
        </div>
    </div>

    <div class=" boxtr">
        <div class="mb10 dg">
            <p class="mhh"> DON GIA <br>
            <div class="mb-3">

                <input type="text" class="form-control" name="price">
            </div>
            </p>
        </div>
        <div class="mb10 dg">
            <p>SO LUOT XEM <br>
            <div class="mb-3">
                <input type="text" class="form-control" id="" placeholder="0" disabled>
            </div>
            </p>
        </div>
    </div>
    <br>
    <p class="mt">MO TA
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="mota"></textarea>
    </div>
    </p>
    <div class="i">
        <input type="submit" value="THEM" name="them" id="t">

        <input type="submit" value="NHAP LAI" name="nl" id="t">
        <a href="index.php?act=dssp">
            <input class="btn" type="button" value="DANH SACH" id="t">
        </a>
    </div>

</div>
<br>
</form>
</div>