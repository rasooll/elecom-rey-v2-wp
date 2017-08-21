<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="comments-alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>

<div class="block-area">
    <div class="block-title"><h4><i class="fa fa-comments widget-icon" aria-hidden="true"></i> دیدگاه ها</h4></div>
	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

        <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
        
            <div class="float-left small"><?php edit_comment_link('ویرایش','&nbsp;&nbsp;',''); ?> &nbsp&nbsp <?php comment_date('j F Y') ?></div>
        
            <?php echo get_avatar( get_comment_author_email( $comment_ID ), $size = '56' ); ?>
            <strong><cite><?php comment_author_link() ?></cite> گفت :</strong>
			<?php if ($comment->comment_approved == '0') : ?>
			<em class="badge">نظر شما در انتظار تایید است</em>
			<?php endif; ?>
            
            <?php comment_text() ?>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

    </ol>
</div>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
        <div class="alert alert-warning alert-dismissible aligncenter" role="alert">
            متاسفانه دیدگاهی وجود ندارد! شما می‌توانید اولین دیدگاه را برای ما بفرستید.
		</div>
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div class="alert alert-danger alert-dismissible aligncenter" role="alert">
            ارسال دیدگاه بسته است.
        </div>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div class="block-area">
<div class="block-title"><h4 id="respond"><i class="fa fa-pencil widget-icon" aria-hidden="true"></i>یک پاسخ بدهید</h4></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<div class="alert alert-danger alert-dismissible aligncenter" role="alert">
    شما باید برای ارسال دیدگاه ابتدا  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">وارد شوید</a>
</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>شما وارد شده‌ اید با نام کاربری <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">خروج &raquo;</a></p>

<?php else : ?>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-top-10">
        <input type="text" name="author" class="form-control" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="نام شما <?php if ($req) echo "(الزامی)"; ?>" />
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-top-10">
        <input type="text" name="email" class="form-control" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="ایمیل (منتشر نخواهدشد) <?php if ($req) echo "(الزامی)"; ?>" />
    </div>
</div>

<!--<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p> -->

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
        <textarea name="comment" id="comment" class="form-control" cols="10" rows="7" tabindex="4" placeholder="نظر شما درباره‌ی این مطلب برای ما بسیار مهم است"></textarea>
    </div>
</div>

<p><input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-danger margin-top-10" value="ارسال دیدگاه" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
