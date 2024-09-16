<?php
/* Template Name: Our Purpose */
?>
<?php get_header(); ?>

    <main role="main">
         <!-- Our Purpose Section -->
         <!-- NOTE: I'm using the same calsess for Our Impact section from front-page here -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="sectionTitle ourPurposeTitle">Our Purpose</h1>
                    </div>
                </div> <!-- /row -->
            </div><!-- /container -->

			<div class="ourImpactContainer">
				<div class="leftCol">
					<img class="ourImpactImg" src="<?php echo get_template_directory_uri(); ?>/img/OurPurposePage/intro.png" alt="">
				</div>
				<div class="rightCol">
					<span class="exTheProblemSpan">EXPLORE THE PROBLEM</span>
					<h1 class="ourImpactTitle">Why is Na’amal’s work so important?</h1>
					<p class="ourImpactcaption">Having fled their home countries in search of a safer place to call home, many refugees are faced with the difficult task of finding <strong>sustainable employment</strong> and <strong>providing for their families</strong>. Most refugees live in countries that also struggle to support much of their native populations.<br><br> Whether because of <strong>legal limitations, language barriers,</strong> or simply a <strong>lack of local opportunity,</strong> many refugees struggle to secure employment. Many refugees have not had the opportunity to receive sufficient education or work experience. Often, refugees are forced to migrate further because of the <strong>absence of opportunity</strong> in their host country. Na’amal was created to pave a way for accessible remote employment for refugees and other underrepresented communities in the face of these obstacles, so that they may have the option of staying in the host country with <strong>meaningful employment.</strong></p>
				</div>
			</div><!-- /customContainer -->
        </section><!-- /Our Purpose Section -->

        <!-- Our Vision Section -->
        <section class="sectionMargin">
            <div class="container ourVisionSection">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Our Vision</h2>
                        <p class="w-50">We envision a world where refugees and other underrepresented communities have effective access to sustainable remote work opportunities regardless of where they live.</p>
                    </div>
                </div>
            </div>
        </section><!-- /Our Vision Section -->

        <!-- Our Mission Section -->
        <section>
        <div class="ourImpactContainer">
				<div class="leftCol">
					<img class="ourImpactImg" src="<?php echo get_template_directory_uri(); ?>/img/OurPurposePage/mission.png" alt="">
				</div>
				<div class="rightCol">
					<h1 class="ourImpactTitle">Our Mission</h1>
          <p class="ourImpactcaption">Na’amal provides refugees and other underrepresented communities training in marketable skills, with a focus on the human/soft skills, collaborating with organisations that train in digital skills, which are required in the global labour market and then links them to sustainable digital remote jobs.</p>
				</div>
			</div><!-- /customContainer -->
        </section><!-- /Our Mission Section -->

        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <a class="getInvolvedLink getInvolvedLinkOurPurpose" href="<?php echo home_url(); ?>/index.php/get-involved/">Get Involved</a>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();?>
