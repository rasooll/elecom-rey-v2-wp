<?php get_header();?> 
<div id="nav-fix-clear"></div>

<div class="container">

	<?php include 'top-sidebar.php';?> 


	<div class="row" >
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"> <!-- Right Sidebar Desktop-->

			<div id="sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?></div>

		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> <!-- Content area -->
		
		<div class="alert alert-info alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<i class="fa fa-telegram alert-telegram" aria-hidden="true"></i><a href="http://telegram.me/iausra" title="عضویت در کانال تلگرام"> اگر در کانال تلگرام ما عضو نیستید هم اکنون می‌توانید عضو شوید !!!</a>
		</div>

		<?php while(have_posts()) : the_post();?> 
		
			<div class="content-area">
				<div class="content-title"><i class="fa fa-edit post-icon" aria-hidden="true"></i><h3>  
				<?php the_title_attribute();?></h3></div>
				<div class="content-text">
					<?php the_content(); ?><br>
					<?php $mid_var = get_post_meta($post->ID, 'dl',true); if(isset($mid_var) && !empty($mid_var)) : ?>
						<a href="<?php echo get_post_meta($post->ID, 'dl',true); ?>">
						<button type="button" class="btn btn-success">دانلود با لینک مستقیم</button>
						</a>
					<?php endif; ?>
				</div>
				<div class="share-row">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">اشتراک گزاری در 
						<a href="https://t.me/share/url?url=<?php echo wp_get_shortlink(); ?>" target="_blank" title="تلگرام">
						<i class="fa fa-telegram shareicon" aria-hidden="true"></i></a>
						<a href="whatsapp://send?text=<?php the_title_attribute();?>: <?php echo wp_get_shortlink(); ?>" data-action="share/whatsapp/share" target="_blank" title="واتس اپ">
						<i class="fa fa-whatsapp shareicon" aria-hidden="true"></i></a>
						<a href="https://twitter.com/intent/tweet?text=<?php the_title_attribute();?>&url=<?php echo wp_get_shortlink(); ?>" target="_blank" title="توئیتر">
						<i class="fa fa-twitter shareicon" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink();?>" target="_blank" title="فیسبوک">
						<i class="fa fa-facebook shareicon" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/share?url=<?php echo wp_get_shortlink();?>" target="_blank" title="گوگل پلاس">
						<i class="fa fa-google-plus-official shareicon" aria-hidden="true"></i></a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6"><p style="float: left;"><code title="لینک کوتاه مطلب"><?php echo wp_get_shortlink(); ?></code></p></div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="row ">
						<div class="col-lg-4 col-md-5 col-sm-4 col-xs-8"><i class="fa fa-user icon-menu" aria-hidden="true"></i> نویسنده:  <?php the_author();?></div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4"><i class="fa fa-calendar icon-menu" aria-hidden="true"></i>
						 <?php the_time('j F Y');?>  </div>
						<div class="col-lg-5 col-md-3 col-sm-4 col-xs-12">
							<i class="fa fa-list icon-menu" aria-hidden="true"></i> دسته بندی ها: <?php the_category(', ') ?>
						</div>
					</div>
					<div class="tags">
					<i class="fa fa-tags icon-menu" aria-hidden="true"></i> برچسب‌ها: <span class="tagss"><?php the_tags( '', '', ''); ?></span>
					</div>
				</div>

			</div>

		 <?php endwhile;?>

            <!-- Comment are -->
            <div class="comment-section">
                <?php if(is_singular() && !is_page()) { ?>
                    <div class="clearfix"></div>
                    <?php
                    if ( is_single() && ! post_password_required() && ( comments_open() || '۰' != get_comments_number() )) comments_template();
                }?>
            </div>

			<!-- Bottom sidebar -->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار پایین') ) : ?><?php endif; ?>

		</div>

		<div class="hidden-lg hidden-md col-sm-12 col-xs-12"> <!-- Right Sidebar Responsive -->

			<div id="sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?>
			</div>

		</div>

	</div>
<?php get_footer();?> 