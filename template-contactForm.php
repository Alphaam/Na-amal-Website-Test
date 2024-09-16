<?php
/* Template Name: Get Involved */
?>
<style>
  .naamalContact {
    text-align: center;
    max-width: 900px;
    margin: 180px auto;
}

.naamalContact .subtitle span{
  display:block;
}

.naamalContact .subtitle{
  color:#000000;
  text-align:center;
}

.naamalContact .title{
  color:#000000;
  font-size:32px;
  line-height:38.4px;
  font-weight:400;
}

.naamalContact a,.naamalContact a:hover{
color:#000;
}


@media only screen and (max-width: 767px) {
  .naamalContact {
    margin: 100px auto 0px auto;
}

.naamalContact .rightCol{
margin-top:50px;
}



}
</style>
<?php get_header(); ?>
    <main role="main" class="getInvolved">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="sectionTitle">Get Involved</h1>
                    <p class="w-50 m-auto pb-5 fz-18">Regardless of who you are, you can play a part in changing the story for refugees and other vulnerable populations. Say hello to find out how you can get involved.</p>
                    <?php echo do_shortcode( '[wpforms id="402"]' )?>
                </div>
            </div>
            <div class="row justify-content-center">
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
        </div>

        <section class="naamalContact rowOverflow">
  <div class="row rowOverflow">
    <div class="col-md-6 leftCol">
        <h4 class="title">Location</h4>
        <p class="subtitle">Na'amal Ltd; London, UK, # 11859084 <span>Na'amal Foundation; Amsterdam, NL # 864309235</span></p>
    </div>
      <div class="col-md-6 rightCol px-0">
      <h4 class="title">Contact</h4>
        <p class="subtitle"><a href="mailto:naamal@naamal.org" target="_blank">naamal@naamal.org</a></p>
      </div>
  </div>
</section>
    </main>

<?php get_footer();?>
