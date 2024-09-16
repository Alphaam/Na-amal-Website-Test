		<!-- footer -->
		<footer>
			<div class="container">
				<hr class="style-1">
				<nav class="navbar-expand-lg navbar-light">
					<div class="row">

						<div class="col-lg-6 order-lg-2 ">
							<div>
								<?php
							wp_nav_menu(array(
								'theme_location' => 'Footer-menu',
								'depth' => 2,
								'menu_class' => 'nav navbar-nav ml-auto footerNavLinks',
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker(),
							));
							?>
							</div>
							<div class="footer-icons justify-content-center">
              <div class="col-xs-1"></div>
              <div class="col-xs-2 mx-1">
                <a href="https://linkedin.com/company/naamal">
                  <img src="https://icongr.am/fontawesome/linkedin-square.svg?size=48&color=currentColor">
                </a>
              </div>
              <div class="col-xs-2 mx-1">
                <a href="https://facebook.com/remoteworkforrefugees">
                  <img src="https://icongr.am/fontawesome/facebook-square.svg?size=48&color=currentColor">
                </a>
              </div>
              <div class="col-xs-2 mx-1">
                <a href="https://instagram.com/_naamal_">
                  <img src="https://icongr.am/fontawesome/instagram.svg?size=48&color=currentColor">
                </a>
              </div>
              <div class="col-xs-2 mx-1">
                <a href="https://twitter.com/_Naamal">
                  <img src="https://icongr.am/fontawesome/twitter-square.svg?size=48&color=currentColor">
                </a>
              </div>
              <div class="col-xs-2 mx-1">
                <a href="http://www.youtube.com/channel/UCKVYzVpGGrzu28o_8HDTE2A">
                  <img src="https://icongr.am/fontawesome/youtube-square.svg?size=48&color=currentColor">
                </a>
              </div>
			
              <div class="col-xs-1"></div>
            </div>
			<div class="custom-built">
								<p style= "margin: 20px" class="copyRights">Made with love by <strong>Re:Coded Labs</strong> | <strong>Na'amal 2022 ®</strong>
								<!-- <strong>Na'amal 2020 ®</strong></p> -->
							</div>
						</div>

						<div class="col-lg-3 order-lg-1 logoAndCopyRights">
							<div><a class="navbar-brand" href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/logo-blue.svg" alt="logo" />
							</a>
							</div>
						<div class="navbar-brand">
								<img src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/Social-enterprise-UK.png" alt="logo" />
								<?php if( is_page("naamal-foundation") ){ ?>
									<a href="https://www.ngosource.org/about-equivalency-determination-on-file-badge?ref=https%3A%2F%2Fnaamal.org%2Fnaamal-foundation%2F" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/NGO_source1.jpg" alt="logo"/>
						</a>
								
							<?php } ?>
								
							</div>
							

						</div>
						<div class="col-lg-3 order-lg-1 logoAndCopyRights">
							<div class="naamal-subscription">
                        <?php  echo do_shortcode("[mc4wp_form id='688']");  ?>
						</div>
					
						</div>
					</div> <!-- row -->
											

				</nav>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		 <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
	></script>
	<script>

		const stickyNav = document.getElementById("stickyNav");
		window.addEventListener("scroll", () => {
		if (window.scrollY == 0) {
			stickyNav.classList.remove("shadowHeader");
		} else {
			stickyNav.classList.add("shadowHeader");
		}
		});

	</script>

	</body>
</html>
