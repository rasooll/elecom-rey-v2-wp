<div id='slideshow1'>
<div class="owl-carousel owl-theme">
    <!-- Start Slide's -->
    <!-- Slide 1 -->
    <?php if (get_option("slide1")==1 && get_option("slide1_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide1_link"); ?>" alt="<?php echo get_option("slide1_dec"); ?>">
            <?php if(get_option("slide1_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide1_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 2 -->
    <?php if (get_option("slide2")==1 && get_option("slide2_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide2_link"); ?>" alt="<?php echo get_option("slide2_dec"); ?>">
            <?php if(get_option("slide2_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide2_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 3 -->
    <?php if (get_option("slide3")==1 && get_option("slide3_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide3_link"); ?>" alt="<?php echo get_option("slide3_dec"); ?>">
            <?php if(get_option("slide3_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide3_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 4 -->
    <?php if (get_option("slide4")==1 && get_option("slide4_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide4_link"); ?>" alt="<?php echo get_option("slide4_dec"); ?>">
            <?php if(get_option("slide4_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide4_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 5 -->
    <?php if (get_option("slide5")==1 && get_option("slide5_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide5_link"); ?>" alt="<?php echo get_option("slide5_dec"); ?>">
            <?php if(get_option("slide5_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide5_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 6 -->
    <?php if (get_option("slide6")==1 && get_option("slide6_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide6_link"); ?>" alt="<?php echo get_option("slide6_dec"); ?>">
            <?php if(get_option("slide5_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide6_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 7 -->
    <?php if (get_option("slide7")==1 && get_option("slide7_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide7_link"); ?>" alt="<?php echo get_option("slide7_dec"); ?>">
            <?php if(get_option("slide7_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide7_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- Slide 8 -->
    <?php if (get_option("slide8")==1 && get_option("slide8_link")!=NULL) {?>
        <div>
            <img src="<?php echo get_option("slide8_link"); ?>" alt="<?php echo get_option("slide8_dec"); ?>">
            <?php if(get_option("slide8_dec") != NULL) { ?>
            <div class="owl-caption">
                <?php echo get_option("slide8_dec"); ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
    
    <!-- End Slide's -->
    <!-- If Slide's empty -->
    <?php if (get_option("slide1")!=1 && get_option("slide2")!=1 && get_option("slide3")!=1 && get_option("slide4")!=1 && get_option("slide5")!=1 && get_option("slide6")!=1 && get_option("slide7")!=1 && get_option("slide8")!=1)  {?>
        <div>
            <h3>لطفا از بخش "تنظیمات اسلایدشو" واقع در مدیریت سایت تصاویر را اضافه کنید</h3>
        </div>
    <?php } ?>
</div>
</div>