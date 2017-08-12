	<footer>
		<div class="row">
			<div class="col-lg-10 col-md-10">
				<div id="footext">
				<div>کلیه حقوق برای انجمن مهندسی برق یادگار محفوظ می‌باشد.</div>
				<div>طراحی و کدنویسی توسط <a href="https://rasooll.com" target="_blank">رسول صفری</a></div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div id="footericon">
					<img id="resimage" src="http://elecom-rey.ir/wp-content/uploads/2017/07/Responsive-icon.png" alt="Responsive" />
				</div>
			</div>
		</div>
	</footer>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    rtl:true,
    dots:true,
    items:1,
    margin:5,
    autoplay:true,
    autoplayTimeout: 4500,
    loop:true
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
</script>
</body>
</html>
