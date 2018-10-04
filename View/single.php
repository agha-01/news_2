	<!-- Feature Category Section & sidebar -->
	<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
	<div class="container margin agha">   
		<div class="row">
		   	 <div class="col-md-9">
				<div class="single_content_layout">
					<?php 
					// $ksql=Controller::$db->kateSelect();
					// $krow=mysqli_fetch_assoc($ksql);
					// $sql=Controller::$db->newsSelect($krow["id"]);
					// $row=mysqli_fetch_assoc($sql);
						$sql=Controller::$db->strSelect($param);
						$row=mysqli_fetch_assoc($sql);

					 ?>




					<div class="item feature_news_item">
						<div class="item_img">
							<img  class="img-responsive" src="<?php echo $site_url."dashboard/".$row["image"]; ?>" alt="Chania">
						</div><!--item_img--> 
							<div class="item_wrapper">
								<div class="news_item_title">
									<h2><?php echo $row["basliq"]; ?></h2>
								</div><!--news_item_title-->
								<!-- <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div> -->

                                    <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>

									<div class="single_social_icon">
										<a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<!--Twitter-->
										<a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										Google +
										<a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
										<!--Linkedin-->
										<a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</div> <!--social_icon1-->

									<div class="item_content">
										<?php echo $row["text"]; ?>
									</div><!--item_content-->

							</div><!--item_wrapper-->	
					</div><!--feature_news_item-->
					<div class="comment">
									<i class="fa fa-eye"></i>
									<span><?php echo $row["baxis"]; ?></span>
									<i class="fa fa-comments"></i>
									<span>45</span>
									<i class="fa fa-thumbs-up"></i>
									<span>55</span>
									<i class="fa fa-thumbs-down"></i>
									<span>15</span>
									

								</div>				   			 
				</div><!--single_content_layout-->
				
		   	 </div>

		<div class="col-md-3">
		   		<div class="lent">
		   			<div class="lent_item">
		   				<h3 class="lent_a">Xeber lenti</h3>
		   			</div>
		   			<!-- xeber right -->
		   			<?php 
		   			$sql=Controller::$db->newsLentSelect($lng);
		   			while ($lrow=mysqli_fetch_assoc($sql)) {

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
		   		<?php } ?>
		   			
		   		
		   			<!-- xeber end -->
		   			<div class="btn_">
		   				<button type="button" class="btn_h"><a href="#" style="color: white !important;">Hamsin goster</a></button>
		   			</div>
		   		</div>		
               
			</div>
		   			           
					</div>
		</div>	   	
</section><!--feature_category_section-->
<style>
	.margin{
		margin-top: 50px;
	}
</style>
<?php 
$count = $row["baxis"]+1;
Controller::$db->updateNews($row["id"],$count);
?>