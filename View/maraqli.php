<div class="max">
	<div class="container agha">
		<h2 class="head"><?php echo $x=$lang[$lng]['maraqli_xeberleri']; ?></h2>
		<div class="news">
			<div class="row">
				<div class="col-md-9">
					<?php 
					$ksql=Controller::$db->kateSelect($lng);
					while ($krow=mysqli_fetch_assoc($ksql)) {
					 ?>
					<div class="blocks">
						<?php 
					$sql=Controller::$db->newsSelect($krow["k_id"],$lng);
					while ($row=mysqli_fetch_assoc($sql)) {
						if ($row["kate_id"]==6) {
							if ($row["status"]==1) {
						 ?>
						<div class="col-md-6 ">
							<a href="<?php echo $site_url."single/"."$lng/".$row["id"];?>" target="_blank">
								<div class="block">
								<img src="<?php echo $site_url."dashboard/".$row["image"]; ?>">
								<div class="img_text">
									<h2><?php echo $row["basliq"]; ?></h2>
								</div>
								</a>
								<div class="comment">
											<i class="fa fa-eye"></i>
											<span><?php echo $row["baxis"]; ?></span>
											<i class="fa fa-comments"></i>
											<span>45</span>
											<i class="fa fa-thumbs-up"></i>
											<span><?php echo $row["beyenme"]; ?></span>
											<i class="fa fa-thumbs-down"></i>
											<span><?php echo $row["beyenmeme"]; ?></span>

										</div>
								</div>
						</div>
						<?php 
					}
								}
							}


						 ?>
					
						
					</div>
				<?php } ?>
				</div>
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

<div class="pagination">
				<li>
			<a id="previous-page" href="javascript:void(0)" aria-label="previous">
				<span aria-hiddin="true">&laquo;</span>
			</a>
		</li>	
			</div>
		</div>

</div>















</div>