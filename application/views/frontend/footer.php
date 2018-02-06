	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Corporate office</strong><br>
					House # 562/563,Road No.#1/A<br>
					 Padma Residential Area,Rajshahi-6207.
					</address>
					<p>
						<i class="icon-phone"></i>0721-761449, 01748938735<br>
						<i class="icon-envelope-alt"></i>srcl2013@gmail.com
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
					
						<p><span>&copy;Copy Right 2018 Sums Real eatate Company Ltd.</span><a href="#" target="_blank"></a></p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="https://web.facebook.com/sumsrealestate/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



<script src="<?php echo base_url();?>assets/frontend/js/jquery.js"></script>
<!---<script src="js/jquery.easing.1.3.js"></script>-->
<script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/jquery-1.9.1.min.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url();?>assets/frontend/materialize/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.fancybox-media.js"></script>  
<script src="<?php echo base_url();?>assets/frontend/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/animate.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
<!-- Vendor Scripts -->
<script src="<?php echo base_url();?>assets/frontend/js/modernizr.custom.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.zoomslider.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/animate.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/js/custom.js"></script>

<!---menu-fixed--top---->
<script>
		// Demo by Aurelio De Rosa (@AurelioDeRosa)
		// See article: http://www.sitepoint.com/css-position-sticky-introduction-polyfills/

		var menu = document.querySelector('.menu');
		var menuPosition = menu.getBoundingClientRect();
		var placeholder = document.createElement('div');
		placeholder.style.width = menuPosition.width + 'px';
		placeholder.style.height = menuPosition.height + 'px';
		var isAdded = false;

		window.addEventListener('scroll', function() {
			if (window.pageYOffset >= menuPosition.top && !isAdded) {
				menu.classList.add('sticky');
				menu.parentNode.insertBefore(placeholder, menu);
				isAdded = true;
			} else if (window.pageYOffset < menuPosition.top && isAdded) {
				menu.classList.remove('sticky');
				menu.parentNode.removeChild(placeholder);
				isAdded = false;
			}
		});

</script>

    <!-- Demo -->

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo{
        width: 100%;
        height: auto;
    }
	#owl-demo1 .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>
	<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
		navigation:true,						 
        autoPlay: 3000,
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
	
    <script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/google-code-prettify/prettify.js"></script>
	<script src="<?php echo base_url();?>assets/frontend/owl-carousel/js/application.js"></script>
<!----carosel-->
<!----carousel-end--->
</body>
</html>