 
  <div class="max home">

   <!-- Feature Carousel Section -->
<section id="feature_news_section" class="feature_news_section section_wrapper ff">


	<div class="container">   
		
	    <div class="row">
	    	<div class="col-md-7">
	    		<div class="reklam_left hidden-sm hidden-xs">
		   		<img src="<?php echo $site_url; ?>assets/img/reklam.gif">
		   				</div>
	    		  <div class="slider_box" width="600px;">
					    <!-- slide & description -->
					    <div class="silder_con">
					    	<?php 
					    	$sql=Controller::$db->sliderSelect($lng);
					    	while ($row=mysqli_fetch_assoc($sql)) {
					    	 ?>
					      <div class="silder_panel">
					        <a href="<?php echo $site_url."singles/"."$lng/".$row["id"]; ?>" class="silder_panel_item">
					          <img src="<?php echo $site_url."dashboard/".$row["image"]; ?>">
					        </a>
					        <a href="#" class="silder_intro">
					          <div class="silder_intro_content"><?php echo $row["basliq"]; ?></div>
					        </a>
					      </div>
					  <?php } ?>
					    </div>
					    <!-- contorl nav (created by JS)-->
					    <div class="silder_nav_mask"></div>
					    <div class="silder_nav"></div>
					</div>
	    	</div><!--col-md-7-->
	    	
	    	<div class="col-md-5">
	    		<div class="banner">
	    			<div class="row">
	    				<div class="col-md-12">
	    					
	    					<div class="r_b hidden-xs hidden-sm">
	    						<table id="calendar-demo" class="calendar"></table>
	    					</div>
	    					<div class="small hidden-xs hidden-sm">
	    							<div class="wrapper"> 
									  <div id="banner_wrap">
									    <div class="banner_content"> 
									 <?php 
									 $sql=Controller::$db->elaveSelect('elave_news');
									 while ($row=mysqli_fetch_assoc($sql)) {
									  ?>
									    	<a id="banner0" class="banner">
									    		<img src="<?php echo $site_url."dashboard/".$row["image"]; ?>">
									    	</a> 

									<?php } ?>
									    </div>
									    <div class="banner_nav">
									      <ul class="nav">
									      <?php 
									 $sql=Controller::$db->elaveSelect('elave_news');
									 while ($row=mysqli_fetch_assoc($sql)) {
									  ?>
									        <li class="navLi" value="<?php echo $row["id"]; ?>"></li>
									     <?php } ?>
									      </ul>
									    </div>
									  </div>
									  
									</div>
	    					</div>
	    					<div class="reklam_right hidden-xs hidden-sm">
		   							<img src="<?php echo $site_url; ?>assets/img/reklam.gif">
		   						</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div><!--col-md-5-->



	    </div><!--row-->
	</div><!--container-->   	
</section><!--feature_news_section-->

    <!-- Feature Category Section & sidebar -->
<section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container agha">   
		<div class="row">
		   	<div class="col-md-9">
								<?php 
							$ksql=Controller::$db->kateSelect($lng);
							while($row=mysqli_fetch_assoc($ksql)){
								 ?>
		   		<!-- olke start -->
		   		<div class="category_layout">
		   			<!-- olke start -->
			   		<div class="item_caregory red">

			   			<h2><a href="#"><?php 
			   						echo $row["name"];

			   			 ?></a></h2>
			   		</div>
						<div class="row">
							<div class="media_wrapper">
						   <?php 
						   $sql=Controller::$db->newslimitSelect($row["k_id"],$lng);
							while ($wrow=mysqli_fetch_assoc($sql)) {
						   		if ($wrow["status"]==1) {
						    ?>
						   		<div class="col-md-6">
									<div class="media">
										<a href="<?php echo $site_url."single/"."$lng/".$wrow["id"];?>">
											<div class="media-left">
											<img class="media-object" src="<?php echo $site_url."dashboard/".$wrow["image"]; ?>" alt="Generic placeholder image">
													</div><!--media-left-->
										<div class="media-body">
											<b class="media-heading"><?php echo $wrow["basliq"]; ?>
											</b>

											<!-- <p id="message"><?php echo $wrow["text"]; ?></p> -->

										</div><!--media-body-->
										</a>

									</div><!--media-->
								
						   		</div><!--col-md-6-->
								<?php }} ?>
						   		

								</div>
				   			
				   		
				   		</div><!--row-->

				</div><!--category_layout-->
					<!-- olke end -->


	
		   		
		   		
		   	<?php 

		   } 

		   ?>
		   	</div><!--col-md-9-->
		   	<div class="col-md-3">
		   		<div class="lent">
		   			<div class="lent_item">
		   				<h3 class="lent_a"><?php echo $x=$lang[$lng]['xeber_lenti']; ?></h3>
		   			</div>
		   			<!-- xeber right -->
		   			<?php 
		   			$sql=Controller::$db->newsLentSelect($lng);
		   			while ($lrow=mysqli_fetch_assoc($sql)) {
		   				if ($lrow["status"]==1) {
		   			 ?>
		   			 <a href="<?php echo $site_url."single/"."$lng/".$lrow['id']; ?>">
			   			<div class="news_lent">
			   				<div class="row">
			   					<!-- <div class="col-md-2"> -->
			   					<!-- </div> -->
			   					<div class="col-md-12">
			   						<p class="hours"><?php echo $lrow["tarix"]; ?></p>		  
			   						<p class="news_all"><?php echo $lrow["basliq"]; ?></p>
			   						
			   					</div>
			   				</div>
			   			</div>
		   			</a>
		   		<?php }} ?>
		   			
		   		
		   			<!-- xeber end -->

			   			<div class="btn_">
			   				<button type="button" class="btn_h"><a href="<?php echo $site_url."news/".$lng ?>" style="color: white !important;"><?php echo $x=$lang[$lng]['hamsin_goster']; ?></a></button>
			   			</div>
	
		   		</div>		
               
			</div>
		</div>	   	
</section><!--feature_category_section-->

</div>
