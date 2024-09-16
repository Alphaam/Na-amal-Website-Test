<?php get_header(); ?>

<main role="main">

  <!-- Our Impact Section -->
  <section class="marginTop50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="sectionTitle">Our Impact</h1>
        </div>
      </div>
    </div>

  </section><!-- /Our Impact Section -->

  <!-- Posts section -->
  <section>

    <div class="container">
      <div class="catList">
        <?php wp_list_categories('title_li='); ?>
      </div>
      <div class="row">
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>

<!--       <div class="row text-center">
        <div class="col-md-12">
          <a class="getInvolvedLink getInvolvedLinkBlog" href="<?php echo home_url(); ?>/index.php/get-involved/">Get Involved</a>
			   </div>
		  </div> -->
    </div>

  </section><!-- /Posts section -->
	

</main>

<?php get_footer(); ?>
