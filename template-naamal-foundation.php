<?php
/* Template Name: Na’amal Foundation */
?>
<?php get_header(); ?>


<style>

.naamalFoundation a.readOurImpactLink {
    margin-bottom: 36px;
    margin-top: 0px;
} 

.naamalFoundation.ourImpactContainer{
  justify-content: space-between;

} 

/* 
.naamalFoundation.ourImpactContainer .rightCol{
max-width:unset;
} */

.naamalWhoWeAre .icon-img{
width:50px;
}

.rowOverflow{
overflow:hidden;
}



.naamalFoundation .title{
  color:#000000;
  font-size: 42px;
  font-weight: 500;
  line-height: 1.2;
  margin-top: 100px;
  text-align:unset;
}

.naamalWhoWeAre{
  text-align: center;
  margin:180px 30px;

}

.naamalWhoWeAre .title{
  color:#000000;
  font-size: 42px;
  font-weight: 500;
  line-height: 1.2;
}

.naamalWhoWeAre .subtitle{
  font-size: 18px;
    color: #000000;
    line-height: 27px;
    max-width: 975px;
    margin: 0 auto;
    font-weight: 400;
    text-align:center;
}

.naamalBoardMembers{
  text-align:center;
}
.naamalBoardMembers .title{
  color:#000000;
  font-size: 42px;
  font-weight: 500;
  line-height: 1.2;
  margin:50px;
}

.naamalBoardMembers .rowSize {
    max-width: 1100px;
    margin: 15px auto;
}

.naamalBoardMembers .card{
  background-color:#ffe4d2;
  padding: 30px;
  text-align: center;
}

.naamalBoardMembers .card-title{
  color:#1e787c;
  font-size: 20px;
  line-height: 28px;
  font-weight:300;
}

.naamalBoardMembers .card-text{
  color:#1e787c;
  font-size: 16px;
  line-height: 22px;
  font-weight:300;
  font-style: italic;
  text-align:center;
}



.naamalBuilding{
  margin: 180px auto;
  text-align:center;
}

.naamalBuilding .subtitle{
  margin:100px 30px 0px 30px;
  font-size: 18px;
    color: #000000;
    line-height: 27px;
    font-weight:400;
    font-style: italic;
    text-align:center;
}
.naamalBuilding .subtitle span{
  display:block;
}

@media only screen and (max-width: 1200px) {

.naamalWhoWeAre .title{
  font-size: 60px;
}

.naamalBoardMembers .title{
  font-size: 60px;
}

.naamalBuilding .building-img{
  width:100%;
}

}

@media only screen and (max-width: 767px) {

.naamalWhoWeAre .title{
  font-size: 50px;
  line-height: 60px;
}

.naamalBoardMembers .title{
  font-size: 50px;
  line-height: 60px;
}

.naamalWhoWeAre{
  margin:50px 30px;
}

.naamalBuilding{
  margin: 50px auto;
}

.naamalBuilding .subtitle{
  margin:50px 30px 0px 30px;
}

}


</style>
<main role="main">

		<!-- Intro Section -->
		<div class="naamalFoundation introContainer">
			<div class="col1">
				<div class="introHeadCaption">
        <h1 class="title">Na’amal Foundation</h1>
        <a class="readOurImpactLink" href="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/Stichting Naamal Policy Plan.pdf" target="_blank" >Policy Plan</a>
				</div>
				<!-- <p class="ourImpactcaption">Having fled their home countries in search of a safer place to call home, many refugees are faced with the difficult task of finding <strong>dignified employment</strong> and <strong>providing for their families</strong>. Most refugees live in countries that also struggle to support much of their native populations.<br><br> Whether because of <strong>legal limitations, language barriers,</strong> or simply a <strong>lack of local opportunity,</strong> many refugees struggle to secure employment. Many refugees have not had the opportunity to receive sufficient education or work experience. Often, refugees are forced to migrate further because of the <strong>absence of opportunity</strong> in their host country. Na’amal was created to pave a way for accessible remote employment for refugees and other underrepresented communities in the face of these obstacles, so that they may have the option of staying in the host country with <strong>meaningful employment.</strong></p> -->
				<img class="introRectangle" src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/introRectangle.png" alt="">
			</div><!-- col1 -->
			<div class="col2">
				<img class="intro" src="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/Desktop.jpg" alt="">
			</div><!-- col2 -->
		</div><!-- /introContainer -->
		<!-- /Intro Section -->

<!-- <section>

    <div class="naamalFoundation ourImpactContainer">
        <div class="rightCol">
					<h1 class="title">Na’amal Foundation</h1>
          
          <a class="readOurImpactLink" href="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/Stichting Na'amal Policly Plan.pdf" target="_blank" >Policy Plan</a>
				</div>
				<div class="leftCol">
        <img class="ourImpactImg desktop-hide" src="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/desktop.jpg" alt="">
				</div>

		</div>
</section> -->

<section class="naamalWhoWeAre rowOverflow">
  <div class="row">
    <div class="col-md-12 ">
    <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/logo-blue-favicon.svg" alt="">
    <h1 class="title">Who We Are</h1>
    <p class="subtitle">Na’amal believes that there is a better way for forcibly displaced people to earn a living than to be subjected to informal work in precarious conditions and in living in indignity. Na’amal takes advantage of digitalisation of the labour market. Na’amal provides refugees and other underrepresented communities with training in marketable skills, focusing on the human/soft skills, and collaborates with other organisations which give training in digital skills. Na’amal believes that both are required for work in the digital economy and, having given training, will support its students to try to get remote jobs.</p>
  </div>
</div>
</section>

<section class="naamalBoardMembers rowOverflow">
  <div class="row rowOverflow">
    <div class="col-md-12 ">
    <h1 class="title">Board Members</h1>
  </div>
  </div>
  <div class="row rowOverflow rowSize">
    <div class="col-md-12">
        <div class="card-deck">
      <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/img/AboutPage/teamPhotos/LorainneCharles.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lorraine Charles</h5>
          <p class="card-text">Chairperson</p>

        </div>
      </div>
			
        <div class="card">
        <img src="https://naamal.org/wp-content/uploads/2019/02/grace-1-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Grace Atkinson</h5>
            <p class="card-text">Chairperson</p>

          </div>
        </div>			
			
        <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/Angela.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Angela Solomon</h5>
            <p class="card-text">Secretary</p>

          </div>
        </div>
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/Adrian.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Adrian Smith</h5>
          <p class="card-text">Treasurer</p>
        </div>
      </div>
    </div>
    </div>
     
  </div>
</section>

<!-- <section class="naamalContact rowOverflow">
  <div class="row rowOverflow">
    <div class="col-md-6 leftCol">
        <h4 class="title">Location</h4>
        <p class="subtitle">Stichting Na'amal, Amsterdam, NL <span>Na’amal Ltd, London, UK 11859084</span></p>
    </div>
      <div class="col-md-6 rightCol px-0">
        <h4 class="title">Contact</h4>
        <p class="subtitle">naamal@naamal.org<span>RSIN 864309235</span></p>
      </div>
  </div>
</section> -->
  	
<section class="naamalBuilding rowOverflow">
  <div class="row rowOverflow">
    <div class="col-md-12">
      <img class="building-img" src="<?php echo get_template_directory_uri(); ?>/img/naamalFoundation/building.jpg" alt="">
        <div>
        <p class="subtitle">The Board of Na’amal Foundation is unpaid <span>Personnel are hired on a project by project basis depending on grants awarded </span></p>
        </div>
    </div>

  </div>
</section>

</main>

<?php get_footer();?>
