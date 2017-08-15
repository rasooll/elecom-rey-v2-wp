<?php
add_action('admin_menu', 'ControlStyle');
function ControlStyle() {
    add_menu_page('تنظیمات اسلایدشو', 'تنظیمات اسلایدشو', '8', 'elecom_rey_carousel', 'wp_ControlStyle', 'http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/slideshow-icon.png');
}
function wp_ControlStyle(){
    if (isset($_POST['wp_submit'])) {
        update_option("carouselcolor", $_POST['carouselcolor']);
        update_option("slide1", $_POST['slide1']);
        update_option("slide1_link", $_POST['slide1_link']);
        update_option("slide1_dec", $_POST['slide1_dec']);
        update_option("slide2", $_POST['slide2']);
        update_option("slide2_link", $_POST['slide2_link']);
        update_option("slide2_dec", $_POST['slide2_dec']);
        update_option("slide3", $_POST['slide3']);
        update_option("slide3_link", $_POST['slide3_link']);
        update_option("slide3_dec", $_POST['slide3_dec']);
        update_option("slide4", $_POST['slide4']);
        update_option("slide4_link", $_POST['slide4_link']);
        update_option("slide4_dec", $_POST['slide4_dec']);
        update_option("slide5", $_POST['slide5']);
        update_option("slide5_link", $_POST['slide5_link']);
        update_option("slide5_dec", $_POST['slide5_dec']);
        update_option("slide6", $_POST['slide6']);
        update_option("slide6_link", $_POST['slide6_link']);
        update_option("slide6_dec", $_POST['slide6_dec']);
        update_option("slide7", $_POST['slide7']);
        update_option("slide7_link", $_POST['slide7_link']);
        update_option("slide7_dec", $_POST['slide7_dec']);
        update_option("slide8", $_POST['slide8']);
        update_option("slide8_link", $_POST['slide8_link']);
        update_option("slide8_dec", $_POST['slide8_dec']);
        echo "<div class='updated settings-error notice is-dismissible'><p><strong>تنظیمات ذخیره شد.</strong></p><button type='button' class='notice-dismiss'><span class='screen-reader-text'>بستن این اعلان.</span></button></div>";
    }
    $carouselcolor = get_option("carouselcolor");
    $slide1 = get_option("slide1");
    $slide1_link = get_option("slide1_link");
    $slide1_dec = get_option("slide1_dec");
    $slide2 = get_option("slide2");
    $slide2_link = get_option("slide2_link");
    $slide2_dec = get_option("slide2_dec");
    $slide3 = get_option("slide3");
    $slide3_link = get_option("slide3_link");
    $slide3_dec = get_option("slide3_dec");
    $slide4 = get_option("slide4");
    $slide4_link = get_option("slide4_link");
    $slide4_dec = get_option("slide4_dec");
    $slide5 = get_option("slide5");
    $slide5_link = get_option("slide5_link");
    $slide5_dec = get_option("slide5_dec");
    $slide6 = get_option("slide6");
    $slide6_link = get_option("slide6_link");
    $slide6_dec = get_option("slide6_dec");
    $slide7 = get_option("slide7");
    $slide7_link = get_option("slide7_link");
    $slide7_dec = get_option("slide7_dec");
    $slide8 = get_option("slide8");
    $slide8_link = get_option("slide8_link");
    $slide8_dec = get_option("slide8_dec");
    ?>

    <div class="wrap">
        <h2><img src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/32/slideshow-icon.png" style="vertical-align: middle; padding-left: 5px;" />تنظیمات اسلایدشو</h2><hr>
        <form action="" method="post">
            <table class="form-table">

                <tr>
                    <th scope="row">رنگ بندی اسلایدشو</th>
                    <td><fieldset>
                            <label><input name="carouselcolor" type="radio" value="default" <?php if($carouselcolor == 'default'){ echo "checked='checked'"; } ?>>خاکستری</label><br />
                            <label><input name="carouselcolor" type="radio" value="green" <?php if($carouselcolor == 'green'){ echo "checked='checked'"; } ?>>سبز</label><br />
                            <label><input name="carouselcolor" type="radio" value="red" <?php if($carouselcolor == 'red'){ echo "checked='checked'"; } ?>>قرمز</label>
                        </fieldset></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide1" value="1" <?php if($slide1==1) echo "checked='checked'"; ?>>اسلاید اول</lable><br><?php if($slide1_link!=NULL) echo "<img src='$slide1_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide1_link" value="<?php echo $slide1_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide1_dec" value="<?php echo $slide1_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide2" value="1" <?php if($slide2==1) echo "checked='checked'"; ?>>اسلاید دوم</lable><br><?php if($slide2_link!=NULL) echo "<img src='$slide2_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide2_link" value="<?php echo $slide2_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide2_dec" value="<?php echo $slide2_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide3" value="1" <?php if($slide3==1) echo "checked='checked'"; ?>>اسلاید سوم</lable><br><?php if($slide3_link!=NULL) echo "<img src='$slide3_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide3_link" value="<?php echo $slide3_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide3_dec" value="<?php echo $slide3_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide4" value="1" <?php if($slide4==1) echo "checked='checked'"; ?>>اسلاید چهارم</lable><br><?php if($slide4_link!=NULL) echo "<img src='$slide4_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide4_link" value="<?php echo $slide4_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide4_dec" value="<?php echo $slide4_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide5" value="1" <?php if($slide5==1) echo "checked='checked'"; ?>>اسلاید پنجم</lable><br><?php if($slide5_link!=NULL) echo "<img src='$slide5_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide5_link" value="<?php echo $slide5_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide5_dec" value="<?php echo $slide5_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide6" value="1" <?php if($slide6==1) echo "checked='checked'"; ?>>اسلاید ششم</lable><br><?php if($slide6_link!=NULL) echo "<img src='$slide6_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide6_link" value="<?php echo $slide6_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide6_dec" value="<?php echo $slide6_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide7" value="1" <?php if($slide7==1) echo "checked='checked'"; ?>>اسلاید هفتم</lable><br><?php if($slide7_link!=NULL) echo "<img src='$slide7_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide7_link" value="<?php echo $slide7_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide7_dec" value="<?php echo $slide7_dec ?>" class="regular-text"></td>
                </tr>

                <tr>
                    <th scope="row"><lable><input type="checkbox" name="slide8" value="1" <?php if($slide8==1) echo "checked='checked'"; ?>>اسلاید هشتم</lable><br><?php if($slide8_link!=NULL) echo "<img src='$slide8_link' width='125' height='auto' />"; ?></th>
                    <td>لینک عکس <br>
                        <input type="text" name="slide8_link" value="<?php echo $slide8_link ?>" class="regular-text"></td>
                    <td>توضیحات عکس <br>
                        <input type="text" name="slide8_dec" value="<?php echo $slide8_dec ?>" class="regular-text"></td>
                </tr>

            </table>
            <p class="submit"><input type="submit" name="wp_submit" class="button button-primary" value="ذخیره‌ی تغییرات"></p>
        </form>
    </div>
<?php } ?>