	<div class="ccr-last-update">
				<div class="update-ribon">Bài mới</div> <!-- /.update-ribon -->
				<span class="update-ribon-right"></span> <!-- /.update-ribon-left -->
				<div class="update-news-text" id="update-news-text">
						<ul id="latestUpdate">  
						    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
						    <li><a href="#">Two</a></li>
						    <li><a href="#">Three</a></li>
						    <li><a href="#">Four</a></li>
						    <li><a href="#">Five</a></li>
						</ul>
				</div> <!-- /.update-text -->

				<div class="update-right-border"></div> <!-- /.update-right-border -->
			</div> <!-- / .ccr-last-update -->


			<section id="ccr-slide-main" class="carousel slide" data-ride="carousel">				
					
					<!-- Carousel items -->
					<div class="carousel-inner">
					
					 <?php 
					 if (count($slide)>0){
					 ?>
						<div class="active item">
							<div class="container slide-element">
								 <img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$slide[0]->Hinh?>" alt="">
								 <p><a href=""><?=$slide[0]->TieuDe?></a></p>
							</div> <!-- /.slide-element -->
						</div> <!--/.active /.item -->					
					
					 <?php                                             	
					   }   // end count($slide)
                       ?> 
					
					<?php
					for($i=1; $i<count($slide);$i++){ ?>                            
									

						<div class="item">
							<div class="container slide-element">
								<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$slide[$i]->Hinh?>" alt=""> 
								<p><a href="#"><?=$slide[$i]->TieuDe?></a>
							</div> <!-- /.slide-element -->
						</div> <!-- /.item -->
						
						 <?php                                             	
                            }
                         ?> 
						
					</div> <!-- /.carousel-inner -->
					
					<!-- slider nav -->
					<a class="carousel-control left" href="#ccr-slide-main" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
					<a class="carousel-control right" href="#ccr-slide-main" data-slide="next"><i class="fa fa-arrow-right"></i></a>

					<ol class="carousel-indicators">
						<li data-target="#ccr-slide-main" data-slide-to="0" class="active"></li>
						<li data-target="#ccr-slide-main" data-slide-to="1"></li>
						<li data-target="#ccr-slide-main" data-slide-to="2"></li>
						<li data-target="#ccr-slide-main" data-slide-to="3"></li>
					</ol> <!-- /.carousel-indicators -->

							
			</section><!-- /#ccr-slide-main -->



			<section id="ccr-latest-post-gallery">
					<div class="ccr-gallery-ttile">
						<span></span> 
						<p>Bài mới nhất</p>
					</div><!-- .ccr-gallery-ttile -->					
						<ul class="ccr-latest-post">						
						<?php
                            for($i=0; $i<count($latest_news);$i++){ ?>
								  
							<li>
								<div class="ccr-thumbnail">
									<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$latest_news[$i]->Hinh?>" alt="">
									<p><a href="#postlink">Chi tiáº¿t</a></p>
								</div>
								<h4><a href="index.php?c=home&a=detail&id=<?=$latest_news[$i]->id?>"><?=$latest_news[$i]->TieuDe?></a></h4>
							</li>
						 <?php                                             	
                            }
                         ?> 	 	
						</ul> <!-- /.ccr-latest-post -->
					
				</section> <!--  /#ccr-latest-post-gallery  -->
				
				<section class="bottom-border">
				</section> <!-- /#bottom-border -->



				
				<section id="ccr-world-news">
				 	<?php 
				 	if (count($tms)>0){
					 ?>
    					<div class="ccr-gallery-ttile">
    							<span></span> 
    							<p><a href="index.php?c=home&a=cat&id_loai=<?=$tms[0]->idLoaiTin?>"> TMS</a></p>
    							
    					</div> <!-- .ccr-gallery-ttile -->
    					
    					<section class="featured-world-news">
    					
    						<div class="featured-world-news-img"><img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$tms[0]->Hinh?>" alt="" ></div>
    						<div class="featured-world-news-post">
    						<h5><a href="index.php?c=home&a=detail&id=<?=$tms[0]->idTin?>"><?=$tms[0]->TieuDe?></a></h5>
    							<?=$tms[0]->TomTat?>
    							<div class="like-comment-readmore">
    								<i class="fa fa-thumbs-o-up"> 08</i>
    								<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>    								
    							</div> <!-- /.like-comment-readmore -->
    						</div>
    			 	<?php                                             	
					   }   // end count($tms)
                       ?> 	
			   	 </section> <!-- /#featured-world-news -->


					<ul>					
						<?php
                            for($i=1; $i<count($tms);$i++){ ?>                            
    						<li>							
    								<div class="ccr-thumbnail">
    									<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$tms[$i]->Hinh?>" alt="">
    									<p><a href="#postlink">Read More</a></p>
    								</div>
    							<h5><a href="index.php?c=home&a=detail&id=<?=$tms[$i]->idTin?>"><?=$tms[$i]->TieuDe?></a></h5>
    						</li>
						
						 <?php                                             	
                            }
                         ?> 						
					</ul>

				</section> <!-- / #ccr-world-news -->


				<section class="bottom-border"></section>
				
				
				<section id="ccr-world-news">
				 	<?php 
				 	if (count($sport)>0){
					 ?>
    					<div class="ccr-gallery-ttile">
    							<span></span> 
    							<p><a href="index.php?c=home&a=cat&id_loai=<?=$sport[0]->idLoaiTin?>"> TMS</a></p>
    							
    					</div> <!-- .ccr-gallery-ttile -->
    					
    					<section class="featured-world-news">
    					
    						<div class="featured-world-news-img"><img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$sport[0]->Hinh?>" alt="" ></div>
    						<div class="featured-world-news-post">
    						<h5><a href="index.php?c=home&a=detail&id=<?=$sport[0]->idTin?>"><?=$sport[0]->TieuDe?></a></h5>
    							<?=$sport[0]->TomTat?>
    							<div class="like-comment-readmore">
    								<i class="fa fa-thumbs-o-up"> 08</i>
    								<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>    								
    							</div> <!-- /.like-comment-readmore -->
    						</div>
    			 	<?php                                             	
					   }   // end count($tms)
                       ?> 	
			   	 </section> <!-- /#featured-world-news -->


					<ul>					
						<?php
						for($i=1; $i<count($sport);$i++){ ?>                            
    						<li>							
    								<div class="ccr-thumbnail">
    									<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$sport[$i]->Hinh?>" alt="">
    									<p><a href="#postlink">Read More</a></p>
    								</div>
    							<h5><a href="index.php?c=home&a=detail&id=<?=$sport[$i]->idTin?>"><?=$sport[$i]->TieuDe?></a></h5>
    						</li>
						
						 <?php                                             	
                            }
                         ?> 						
					</ul>

				</section> <!-- / #ccr-world-news -->

				

				<section class="bottom-border"></section>